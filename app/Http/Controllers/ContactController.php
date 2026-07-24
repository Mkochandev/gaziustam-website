<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
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

        return response()->json([
            'success' => true,
            'message' => '14 Günlük Ücretsiz Deneme talebiniz veritabanına kaydedildi.',
            'data' => $record
        ]);
    }

    /**
     * Admin view to view all submitted leads & contact requests (Protected).
     */
    public function index(Request $request)
    {
        if (!session('admin_authenticated')) {
            return redirect()->route('admin.login.form');
        }

        $requests = ContactRequest::latest()->get();
        return view('admin.requests', compact('requests'));
    }

    /**
     * Show admin login form.
     */
    public function showLoginForm()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.talepler');
        }

        return view('admin.login');
    }

    /**
     * Process admin login.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $validUsername = env('ADMIN_USERNAME', 'admin');
        $validPassword = env('ADMIN_PASSWORD', 'gaziustam2026');

        if ($credentials['username'] === $validUsername && $credentials['password'] === $validPassword) {
            session(['admin_authenticated' => true]);
            return redirect()->route('admin.talepler')->with('success', 'Hoş geldiniz! Admin girişi sağlandı.');
        }

        return back()->withErrors(['error' => 'Kullanıcı adı veya şifre hatalı!']);
    }

    /**
     * Admin logout.
     */
    public function logout(Request $request)
    {
        session()->forget('admin_authenticated');
        return redirect()->route('admin.login.form')->with('success', 'Admin oturumu kapatıldı.');
    }
}
