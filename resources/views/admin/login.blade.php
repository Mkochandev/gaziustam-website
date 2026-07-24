<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gazi Ustam - Admin Yönetim Girişi</title>

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
    </style>
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full bg-white rounded-3xl p-8 border border-slate-200 shadow-xl space-y-6">
        <!-- Header -->
        <div class="text-center space-y-3">
            <div class="w-14 h-14 rounded-2xl bg-emerald-600 text-white font-extrabold flex items-center justify-center text-2xl mx-auto shadow-md">
                G
            </div>
            <h1 class="text-2xl font-extrabold text-slate-900">Gazi Ustam Admin Girişi</h1>
            <p class="text-xs text-slate-500">Müşteri taleplerini ve ücretsiz deneme kayıtlarını yönetmek için giriş yapın.</p>
        </div>

        <!-- Error Alert -->
        @if($errors->has('error'))
            <div class="p-4 rounded-xl bg-rose-50 border border-rose-200 text-rose-700 text-xs font-semibold flex items-center gap-2">
                <svg class="w-5 h-5 shrink-0 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>{{ $errors->first('error') }}</span>
            </div>
        @endif

        @if(session('success'))
            <div class="p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold">
                {{ session('success') }}
            </div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1.5">Kullanıcı Adı</label>
                <input type="text" name="username" required placeholder="admin" autofocus class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600 font-medium">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 mb-1.5">Şifre</label>
                <input type="password" name="password" required placeholder="••••••••" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
            </div>

            <button type="submit" class="w-full py-3.5 rounded-xl font-bold bg-emerald-600 hover:bg-emerald-700 text-white shadow-md transition-colors">
                Giriş Yap
            </button>
        </form>

        <div class="pt-4 border-t border-slate-100 text-center">
            <a href="/" class="text-xs font-bold text-slate-500 hover:text-slate-900">← Tanıtım Sitesine Dön</a>
        </div>
    </div>

</body>
</html>
