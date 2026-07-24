<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gazi Ustam - Gelen Müşteri Talepleri ve Kayıtlar</title>

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
<body class="bg-slate-50 text-slate-900 min-h-screen p-6 sm:p-10">

    <div class="max-w-6xl mx-auto space-y-6">
        <!-- Header -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white font-extrabold flex items-center justify-center text-lg">
                    G
                </div>
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-900">Gazi Ustam - Gelen Talepler & Kayıtlar</h1>
                    <p class="text-xs text-slate-500">Web sitesi üzerinden iletilen ücretsiz deneme ve paket satın alma talepleri veritabanı.</p>
                </div>
            </div>
            <a href="/" class="bg-slate-900 text-white text-xs font-bold px-4 py-2.5 rounded-xl hover:bg-slate-800 transition-colors">
                ← Web Sitesine Dön
            </a>
        </div>

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

</body>
</html>
