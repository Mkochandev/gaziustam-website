<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gazi Ustam - Admin Yönetim Paneli</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="alternate icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/favicon.svg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="/build/assets/app.css">
    @endif

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; color: #0f172a; }
        .admin-nav-btn.active { background-color: #059669; color: #ffffff; font-weight: 700; border-color: #059669; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen p-4 sm:p-8">

    <div class="max-w-6xl mx-auto space-y-6">
        <!-- Header -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <img src="/images/logo.svg" alt="Gazi Ustam Logo" class="w-10 h-10 rounded-xl shadow-sm" />
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-900">Gazi Ustam - Admin Paneli</h1>
                    <p class="text-xs text-slate-500">Müşteri talepleri, site trafik istatistikleri ve yönetici ayarları.</p>
                </div>
            </div>
            
            <div class="flex items-center gap-3">
                <a href="/" class="bg-slate-100 text-slate-700 text-xs font-bold px-4 py-2.5 rounded-xl hover:bg-slate-200 transition-colors border border-slate-300">
                    ← Tanıtım Sitesi
                </a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-rose-600 hover:bg-rose-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl transition-colors shadow-sm">
                        Çıkış Yap
                    </button>
                </form>
            </div>
        </div>

        <!-- Success & Error Alerts -->
        @if(session('success'))
            <div class="p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if(session('profile_success'))
            <div class="p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                <span>{{ session('profile_success') }}</span>
            </div>
        @endif

        @if($errors->has('profile_error'))
            <div class="p-4 rounded-xl bg-rose-50 border border-rose-200 text-rose-700 text-xs font-semibold flex items-center gap-2">
                <svg class="w-5 h-5 text-rose-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>{{ $errors->first('profile_error') }}</span>
            </div>
        @endif

        <!-- Admin Navigation Tabs -->
        <div class="flex flex-wrap gap-2 border-b border-slate-200 pb-3">
            <button onclick="switchAdminTab('talepler')" id="nav-btn-talepler" class="admin-nav-btn active px-5 py-2.5 rounded-xl border border-slate-300 text-xs font-bold transition-all flex items-center gap-2">
                <span>📥 Gelen Müşteri Talepleri</span>
                <span class="bg-emerald-800 text-white px-2 py-0.5 rounded-full text-[11px] font-extrabold">{{ count($requests) }}</span>
            </button>

            <button onclick="switchAdminTab('trafigi')" id="nav-btn-trafigi" class="admin-nav-btn px-5 py-2.5 rounded-xl border border-slate-300 text-xs font-bold text-slate-600 hover:text-slate-900 bg-white transition-all flex items-center gap-2">
                <span>📈 Site Trafik İstatistikleri</span>
                <span class="bg-slate-200 text-slate-800 px-2 py-0.5 rounded-full text-[11px] font-extrabold">{{ $todayVisits }} Bugün</span>
            </button>

            <button onclick="switchAdminTab('profil')" id="nav-btn-profil" class="admin-nav-btn px-5 py-2.5 rounded-xl border border-slate-300 text-xs font-bold text-slate-600 hover:text-slate-900 bg-white transition-all flex items-center gap-2">
                <span>⚙️ Şifre & Kullanıcı Ayarları</span>
            </button>
        </div>

        <!-- TAB 1: Gelen Müşteri Talepleri -->
        <div id="admin-tab-talepler" class="admin-tab-section space-y-6">
            <!-- Stats Bar -->
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-xl border border-slate-200">
                    <span class="text-xs text-slate-500 font-medium">Toplam Talep</span>
                    <p class="text-2xl font-extrabold text-slate-900 mt-1">{{ count($requests) }} Kayıt</p>
                </div>
                <div class="bg-white p-4 rounded-xl border border-slate-200">
                    <span class="text-xs text-slate-500 font-medium">14 Gün Ücretsiz Deneme</span>
                    <p class="text-2xl font-extrabold text-emerald-600 mt-1">{{ $requests->where('type', 'trial')->count() }} Kayıt</p>
                </div>
                <div class="bg-white p-4 rounded-xl border border-slate-200">
                    <span class="text-xs text-slate-500 font-medium">Paket & İletişim Talepleri</span>
                    <p class="text-2xl font-extrabold text-slate-900 mt-1">{{ $requests->where('type', 'contact')->count() }} Kayıt</p>
                </div>
            </div>

            <!-- Requests Table -->
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <div class="p-4 border-b border-slate-100 font-bold text-slate-900 text-sm">
                    Tüm Veritabanı Kayıtları (Tarihe Göre Sıralı)
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs sm:text-sm">
                        <thead class="bg-slate-100 text-slate-700 font-semibold border-b border-slate-200">
                            <tr>
                                <th class="p-3.5">ID</th>
                                <th class="p-3.5">Tip</th>
                                <th class="p-3.5">Ad Soyad</th>
                                <th class="p-3.5">Telefon</th>
                                <th class="p-3.5">E-Posta</th>
                                <th class="p-3.5">Firma / Şantiye</th>
                                <th class="p-3.5">Seçilen Paket</th>
                                <th class="p-3.5">Mesaj / Not</th>
                                <th class="p-3.5">Tarih</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @if(count($requests) > 0)
                                @foreach($requests as $req)
                                    <tr class="hover:bg-slate-50">
                                        <td class="p-3.5 font-bold text-slate-500">#{{ $req->id }}</td>
                                        <td class="p-3.5">
                                            @if($req->type === 'trial')
                                                <span class="bg-emerald-100 text-emerald-800 text-[11px] font-bold px-2 py-0.5 rounded">Deneme</span>
                                            @else
                                                <span class="bg-slate-200 text-slate-800 text-[11px] font-bold px-2 py-0.5 rounded">İletişim</span>
                                            @endif
                                        </td>
                                        <td class="p-3.5 font-bold text-slate-900">{{ $req->name }}</td>
                                        <td class="p-3.5 font-semibold text-emerald-700">
                                            <a href="tel:{{ $req->phone }}" class="hover:underline">{{ $req->phone }}</a>
                                        </td>
                                        <td class="p-3.5 text-slate-600">{{ $req->email }}</td>
                                        <td class="p-3.5 text-slate-700 font-medium">{{ $req->company_name ?? '-' }}</td>
                                        <td class="p-3.5 font-semibold text-slate-900">{{ $req->package_name ?? '-' }}</td>
                                        <td class="p-3.5 text-slate-500 max-w-xs truncate">{{ $req->message ?? '-' }}</td>
                                        <td class="p-3.5 text-slate-400 text-xs">{{ $req->created_at->format('d.m.Y H:i') }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="p-8 text-center text-slate-400">Henüz kaydedilmiş talep bulunmuyor.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- TAB 2: Site Trafiği & İstatistikler -->
        <div id="admin-tab-trafigi" class="admin-tab-section hidden space-y-6">
            <!-- Traffic Stats Cards -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                    <span class="text-xs text-slate-500 font-medium">Bugünkü Ziyaretler</span>
                    <p class="text-3xl font-extrabold text-emerald-600 mt-1">{{ $todayVisits }}</p>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                    <span class="text-xs text-slate-500 font-medium">Toplam Sayfa Görüntüleme</span>
                    <p class="text-3xl font-extrabold text-slate-900 mt-1">{{ $totalVisits }}</p>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                    <span class="text-xs text-slate-500 font-medium">Tekil IP Ziyaretçileri</span>
                    <p class="text-3xl font-extrabold text-slate-900 mt-1">{{ $uniqueIPs }}</p>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm">
                    <span class="text-xs text-slate-500 font-medium">Mobil Cihaz Ziyaretleri</span>
                    <p class="text-3xl font-extrabold text-emerald-600 mt-1">{{ $mobileVisits }}</p>
                </div>
            </div>

            <!-- Recent Visitors Table -->
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm space-y-4">
                <div class="p-4 border-b border-slate-100 font-bold text-slate-900 text-sm flex items-center justify-between">
                    <span>Son Ziyaretçi Trafik Kayıtları (Güncel)</span>
                    <span class="text-xs text-slate-500">Canlı İzleme Active</span>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs sm:text-sm">
                        <thead class="bg-slate-100 text-slate-700 font-semibold border-b border-slate-200">
                            <tr>
                                <th class="p-3.5">Zaman</th>
                                <th class="p-3.5">IP Adresi</th>
                                <th class="p-3.5">Sayfa URL</th>
                                <th class="p-3.5">Cihaz Türü</th>
                                <th class="p-3.5">Tarayıcı & User Agent</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @if(count($recentVisits) > 0)
                                @foreach($recentVisits as $visit)
                                    <tr class="hover:bg-slate-50">
                                        <td class="p-3.5 font-bold text-slate-900">{{ $visit->created_at->format('d.m.Y H:i:s') }}</td>
                                        <td class="p-3.5 font-mono text-emerald-700 font-semibold">{{ $visit->ip_address }}</td>
                                        <td class="p-3.5 font-medium text-slate-800">{{ $visit->url }}</td>
                                        <td class="p-3.5">
                                            @if($visit->device_type === 'Mobile')
                                                <span class="bg-emerald-100 text-emerald-800 text-[11px] font-bold px-2 py-0.5 rounded">📱 Mobil</span>
                                            @else
                                                <span class="bg-slate-200 text-slate-800 text-[11px] font-bold px-2 py-0.5 rounded">💻 Masaüstü</span>
                                            @endif
                                        </td>
                                        <td class="p-3.5 text-slate-500 max-w-xs truncate">{{ $visit->user_agent }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="p-8 text-center text-slate-400">Henüz trafik kaydı yok.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- TAB 3: Şifre & Kullanıcı Ayarları -->
        <div id="admin-tab-profil" class="admin-tab-section hidden space-y-6">
            <div class="max-w-2xl bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-6">
                <div class="border-b border-slate-100 pb-4">
                    <h3 class="text-xl font-extrabold text-slate-900">Admin Giriş & Şifre Güncelleme</h3>
                    <p class="text-xs text-slate-500 mt-1">Yönetici kullanıcı adınızı ve şifrenizi veritabanında güvenle güncelleyebilirsiniz.</p>
                </div>

                <form action="{{ route('admin.profile.update') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Ad Soyad / Unvan</label>
                        <input type="text" name="name" value="{{ $admin->name ?? 'Sistem Yöneticisi' }}" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600 font-medium">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Admin Kullanıcı Adı</label>
                        <input type="text" name="username" value="{{ $admin->username ?? 'admin' }}" required class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600 font-bold">
                    </div>

                    <div class="pt-2 border-t border-slate-100">
                        <label class="block text-xs font-bold text-slate-700 mb-1">Mevcut Şifreniz <span class="text-rose-500">*</span></label>
                        <input type="password" name="current_password" required placeholder="Değişiklik için mevcut şifrenizi girin" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Yeni Şifre (İsteğe Bağlı)</label>
                            <input type="password" name="new_password" placeholder="En az 6 karakter" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Yeni Şifre Tekrar</label>
                            <input type="password" name="new_password_confirmation" placeholder="Yeni şifreyi tekrar yazın" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
                        </div>
                    </div>

                    <button type="submit" class="w-full py-3.5 rounded-xl font-bold bg-emerald-600 hover:bg-emerald-700 text-white shadow-md transition-colors">
                        Bilgilerimi ve Şifremi Güncelle
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Client Script for Admin Tabs -->
    <script>
        function switchAdminTab(tabKey) {
            document.querySelectorAll('.admin-tab-section').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.admin-nav-btn').forEach(el => {
                el.classList.remove('active');
                el.classList.add('text-slate-600', 'bg-white');
            });

            const section = document.getElementById('admin-tab-' + tabKey);
            const btn = document.getElementById('nav-btn-' + tabKey);

            if (section) section.classList.remove('hidden');
            if (btn) {
                btn.classList.add('active');
                btn.classList.remove('text-slate-600', 'bg-white');
            }
        }
        window.switchAdminTab = switchAdminTab;
    </script>
</body>
</html>
