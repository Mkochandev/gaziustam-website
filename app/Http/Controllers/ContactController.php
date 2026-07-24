<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\ContactRequest;
use App\Models\PageVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Dispatch lead payload to SaaS Main Panel API (gazi-ustam)
     */
    private function sendToSaaSPanel(array $payload)
    {
        try {
            $panelUrl = env('PANEL_API_URL', 'http://localhost/gazi-ustam/public/api/v1/website-leads');
            $secretKey = env('PANEL_API_SECRET', 'gaziustam_secret_2026');

            Http::timeout(5)
                ->withHeaders(['X-Api-Secret' => $secretKey])
                ->post($panelUrl, $payload);
        } catch (\Throwable $e) {
            Log::warning('SaaS Panel Lead Webhook Dispatch Failed: ' . $e->getMessage());
        }
    }

    /**
     * Helper to record page visits / traffic.
     */
    public static function recordVisit(Request $request)
    {
        try {
            $agent = strtolower($request->header('User-Agent', ''));
            $deviceType = 'Desktop';
            if (str_contains($agent, 'mobile') || str_contains($agent, 'android') || str_contains($agent, 'iphone')) {
                $deviceType = 'Mobile';
            } elseif (str_contains($agent, 'ipad') || str_contains($agent, 'tablet')) {
                $deviceType = 'Tablet';
            }

            PageVisit::create([
                'ip_address' => $request->ip(),
                'url' => $request->path() === '/' ? 'Ana Sayfa' : $request->path(),
                'user_agent' => substr($request->header('User-Agent'), 0, 255),
                'device_type' => $deviceType,
                'referer' => substr($request->header('referer'), 0, 255),
            ]);
        } catch (\Throwable $e) {
            // Ignore logging errors
        }
    }

    /**
     * Store contact or package inquiry request.
     */
    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'package_name' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
        ]);

        $record = ContactRequest::create([
            'type' => 'contact',
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'package_name' => $validated['package_name'] ?? 'Standart Üyelik',
            'message' => $validated['message'] ?? null,
            'ip_address' => $request->ip(),
        ]);

        // SaaS Ana Panele Bildir (gazi-ustam)
        $this->sendToSaaSPanel([
            'type' => 'contact',
            'name' => $record->name,
            'email' => $record->email,
            'phone' => $record->phone,
            'package_name' => $record->package_name,
            'message' => $record->message,
            'ip_address' => $record->ip_address,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'İletişim talebiniz veritabanına kaydedildi. En kısa sürede sizinle iletişime geçilecektir.',
            'data' => $record
        ]);
    }

    /**
     * Store 14-day free trial registration request.
     */
    public function storeTrial(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
        ]);

        $record = ContactRequest::create([
            'type' => 'trial',
            'name' => $validated['name'],
            'company_name' => $validated['company_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'package_name' => '14 Gün Ücretsiz Deneme',
            'ip_address' => $request->ip(),
        ]);

        // SaaS Ana Panele Bildir (gazi-ustam)
        $this->sendToSaaSPanel([
            'type' => 'trial',
            'name' => $record->name,
            'company_name' => $record->company_name,
            'email' => $record->email,
            'phone' => $record->phone,
            'package_name' => $record->package_name,
            'ip_address' => $record->ip_address,
        ]);

        return response()->json([
            'success' => true,
            'message' => '14 Günlük Ücretsiz Deneme talebiniz veritabanına kaydedildi.',
            'data' => $record
        ]);
    }

    /**
     * Main Admin Dashboard (/admin)
     */
    public function index(Request $request)
    {
        if (!session('admin_authenticated')) {
            return redirect()->route('admin.login.form');
        }

        // Current Admin User
        $adminId = session('admin_id');
        $admin = $adminId ? Admin::find($adminId) : Admin::first();
        if (!$admin) {
            $admin = Admin::create([
                'name' => 'Sistem Yöneticisi',
                'username' => 'admin',
                'password' => Hash::make('gaziustam2026')
            ]);
        }

        // Requests Data
        $requests = ContactRequest::latest()->get();

        // Traffic Analytics
        $todayVisits = PageVisit::whereDate('created_at', now()->today())->count();
        $totalVisits = PageVisit::count();
        $uniqueIPs = PageVisit::distinct('ip_address')->count('ip_address');
        $mobileVisits = PageVisit::where('device_type', 'Mobile')->count();
        $recentVisits = PageVisit::latest()->take(20)->get();

        return view('admin.requests', compact(
            'requests',
            'admin',
            'todayVisits',
            'totalVisits',
            'uniqueIPs',
            'mobileVisits',
            'recentVisits'
        ));
    }

    /**
     * Show admin login form.
     */
    public function showLoginForm()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Process admin login using DB.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin = Admin::where('username', $credentials['username'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            session([
                'admin_authenticated' => true,
                'admin_id' => $admin->id,
                'admin_username' => $admin->username
            ]);
            return redirect()->route('admin.dashboard')->with('success', 'Hoş geldiniz! Admin girişi sağlandı.');
        }

        return back()->withErrors(['error' => 'Kullanıcı adı veya şifre hatalı!']);
    }

    /**
     * Update Admin Username & Password in Database.
     */
    public function updateProfile(Request $request)
    {
        if (!session('admin_authenticated')) {
            return redirect()->route('admin.login.form');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'current_password' => 'required|string',
            'new_password' => 'nullable|string|min:6|confirmed',
        ]);

        $adminId = session('admin_id');
        $admin = $adminId ? Admin::find($adminId) : Admin::first();

        if (!$admin || !Hash::check($validated['current_password'], $admin->password)) {
            return back()->withErrors(['profile_error' => 'Mevcut şifreniz hatalı! Lütfen tekrar kontrol edin.']);
        }

        $admin->name = $validated['name'];
        $admin->username = $validated['username'];

        if (!empty($validated['new_password'])) {
            $admin->password = Hash::make($validated['new_password']);
        }

        $admin->save();

        session(['admin_username' => $admin->username]);

        return back()->with('profile_success', 'Admin kullanıcı bilgileri ve şifreniz başarıyla güncellendi!');
    }

    /**
     * Admin logout.
     */
    public function logout(Request $request)
    {
        session()->forget(['admin_authenticated', 'admin_id', 'admin_username']);
        return redirect()->route('admin.login.form')->with('success', 'Admin oturumu kapatıldı.');
    }
}
