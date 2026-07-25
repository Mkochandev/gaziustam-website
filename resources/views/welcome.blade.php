<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usta Takip Programı & Şantiye Puantaj Yazılımı - Gazi Ustam</title>
    <meta name="description" content="Türkiye'nin en gelişmiş usta takip programı Gazi Ustam ile şantiye usta yevmiye, puantaj ve hakediş hesaplamalarını dijitalleştirin. 14 gün ücretsiz deneyin!">
    <meta name="keywords" content="usta takip programı, usta takip yazılımı, şantiye puantaj programı, usta hakediş hesaplama, usta yevmiye takip sistemi, şantiye usta yönetim yazılımı, usta devam takip programı">
    <meta name="author" content="Gazi Ustam">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="https://gaziustam.com/">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gaziustam.com/">
    <meta property="og:title" content="Usta Takip Programı & Şantiye Puantaj Yazılımı - Gazi Ustam">
    <meta property="og:description" content="Gazi Ustam usta takip programı ile şantiye puantaj, yevmiye ve hakediş hesaplamalarını saniyeler içinde yönetin.">
    <meta property="og:image" content="https://gaziustam.com/images/logo.svg">
    <meta property="og:site_name" content="Gazi Ustam">
    <meta property="og:locale" content="tr_TR">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://gaziustam.com/">
    <meta name="twitter:title" content="Usta Takip Programı & Şantiye Puantaj Yazılımı - Gazi Ustam">
    <meta name="twitter:description" content="Gazi Ustam usta takip programı ile şantiye puantaj, yevmiye ve hakediş hesaplamalarını saniyeler içinde yönetin.">
    <meta name="twitter:image" content="https://gaziustam.com/images/logo.svg">

    <!-- JSON-LD Structured Data for Google SERP -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "SoftwareApplication",
          "@id": "https://gaziustam.com/#software",
          "name": "Gazi Ustam - Usta Takip Programı",
          "operatingSystem": "Web, iOS, Android",
          "applicationCategory": "BusinessApplication",
          "description": "Gazi Ustam; şantiyeler ve inşaat firmaları için geliştirilmiş usta takip programı, puantaj ve hakediş hesaplama yazılımıdır.",
          "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "TRY",
            "description": "14 Gün Ücretsiz Deneme"
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "142"
          }
        },
        {
          "@type": "Organization",
          "@id": "https://gaziustam.com/#organization",
          "name": "Gazi Ustam",
          "url": "https://gaziustam.com/",
          "logo": "https://gaziustam.com/images/logo.svg",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+90-532-226-99-66",
            "contactType": "customer service",
            "areaServed": "TR",
            "availableLanguage": "Turkish"
          }
        },
        {
          "@type": "FAQPage",
          "@id": "https://gaziustam.com/#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "14 Günlük Ücretsiz Denemede tüm usta takip özelliklerini kullanabilir miyim?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet! Gazi Ustam usta takip programında tüm özellikler ücretsiz deneme süresinde kısıtlamasız olarak açıktır. Usta ekleyebilir, puantaj girebilir ve hakediş raporlarınızı oluşturabilirsiniz."
              }
            },
            {
              "@type": "Question",
              "name": "Yıllık ödeme indiriminden nasıl yararlanabilirim?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Üyelik paketlerinde 'Yıllık Ödeme' seçeneğini tercih ettiğinizde standart aylık 3.000 ₺ olan ücret, aylık 2.000 ₺'ye düşer."
              }
            },
            {
              "@type": "Question",
              "name": "Firmamıza özel kişiselleştirme ve usta takip modülü eklenebiliyor mu?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Evet, kurumsal paketlerimizde firmanızın şantiye süreçlerine özel modül geliştirme, özel alan ekleme ve marka kişiselleştirmesi yapıyoruz."
              }
            }
          ]
        }
      ]
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="alternate icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/favicon.svg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="/build/assets/app.css">
    @endif

    <style>
        body { font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; background-color: #f8fafc; color: #0f172a; }
        .corp-header { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(12px); border-bottom: 1px solid #e2e8f0; }
        .corp-card { background: #ffffff; border: 1px solid #e2e8f0; box-shadow: 0 1px 3px rgba(0,0,0,0.05); transition: all 0.25s ease; }
        .corp-card:hover { border-color: #cbd5e1; box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.08); }
        .corp-card-popular { background: #ffffff; border: 2px solid #059669; box-shadow: 0 12px 30px -5px rgba(5, 150, 105, 0.15); }
        .tab-btn.active { background-color: #059669; color: #ffffff; font-weight: 700; border-color: #059669; }
    </style>
</head>
<body class="antialiased text-slate-900 bg-slate-50 min-h-screen">

    <!-- Toast Notification -->
    <div id="toast" class="fixed top-5 right-5 z-50 transform translate-x-full opacity-0 transition-all duration-300 pointer-events-none flex items-center gap-3 bg-slate-900 text-white px-6 py-4 rounded-xl shadow-2xl border border-slate-700">
        <div class="w-9 h-9 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
        </div>
        <div>
            <h4 id="toast-title" class="font-bold text-sm text-emerald-400">Talebiniz Alındı</h4>
            <p id="toast-message" class="text-xs text-slate-300">İşleminiz başarıyla gerçekleşti.</p>
        </div>
    </div>

    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 right-0 z-40 corp-header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="#" class="flex items-center gap-3 group">
                <img src="/images/logo.svg" alt="Gazi Ustam Logo" class="w-10 h-10 rounded-xl shadow-sm transform group-hover:scale-105 transition-transform duration-200" />
                <div>
                    <span class="text-xl font-extrabold text-slate-900 tracking-tight flex items-center gap-2">
                        Gazi Ustam
                        <span class="text-[11px] font-bold px-2 py-0.5 rounded bg-emerald-50 text-emerald-700 border border-emerald-200">Kurumsal</span>
                    </span>
                    <span class="text-xs text-slate-500 block font-medium">Usta & Şantiye Yönetim Paneli</span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-700">
                <a href="#ozellikler" class="hover:text-emerald-600 transition-colors">Özellikler</a>
                <a href="#ekranlar" class="hover:text-emerald-600 transition-colors">Canlı Ekranlar</a>
                <a href="#paketler" class="hover:text-emerald-600 transition-colors">Üyelik Paketleri</a>
                <a href="#sss" class="hover:text-emerald-600 transition-colors">SSS</a>
                <a href="#iletisim" class="hover:text-emerald-600 transition-colors">İletişim</a>
            </nav>

            <!-- Actions -->
            <div class="hidden sm:flex items-center gap-4">
                <a href="https://panel.gaziustam.com/login" target="_blank" rel="noopener noreferrer" class="text-sm font-semibold text-slate-700 hover:text-emerald-600 px-3 py-2 flex items-center gap-1.5 transition-colors">
                    <span>Müşteri Girişi</span>
                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
                <button onclick="openTrialModal()" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm px-5 py-2.5 rounded-xl shadow-sm transition-all flex items-center gap-2">
                    <span>14 Gün Ücretsiz Deneyin</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>

            <!-- Mobile Menu Toggle -->
            <button onclick="toggleMobileMenu()" class="md:hidden p-2 text-slate-700 hover:text-slate-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-slate-200 px-4 pt-3 pb-6 space-y-3">
            <a href="#ozellikler" onclick="toggleMobileMenu()" class="block py-2 text-sm font-semibold text-slate-700">Özellikler</a>
            <a href="#ekranlar" onclick="toggleMobileMenu()" class="block py-2 text-sm font-semibold text-slate-700">Canlı Ekranlar</a>
            <a href="#paketler" onclick="toggleMobileMenu()" class="block py-2 text-sm font-semibold text-slate-700">Üyelik Paketleri</a>
            <a href="#sss" onclick="toggleMobileMenu()" class="block py-2 text-sm font-semibold text-slate-700">SSS</a>
            <a href="#iletisim" onclick="toggleMobileMenu()" class="block py-2 text-sm font-semibold text-slate-700">İletişim</a>
            <a href="https://panel.gaziustam.com/login" target="_blank" rel="noopener noreferrer" class="block py-2 text-sm font-bold text-emerald-600">Müşteri Girişi (Panel)</a>
            <div class="pt-3 border-t border-slate-100">
                <button onclick="openTrialModal(); toggleMobileMenu();" class="w-full bg-emerald-600 text-white font-bold py-3 rounded-xl">14 Gün Ücretsiz Deneyin</button>
            </div>
        </div>

    </header>

    <main class="pt-28">
        <!-- Hero Section -->
        <section class="py-16 lg:py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <!-- Hero Text -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs sm:text-sm font-semibold">
                        <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                        <span>Şantiye & Usta Yönetiminde Kurumsal Güvence</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.15]">
                        Usta Takip Programı & <br class="hidden sm:inline">
                        <span class="text-emerald-600">Şantiye Puantaj Yazılımı</span>
                    </h1>

                    <p class="text-lg text-slate-600 max-w-2xl leading-relaxed">
                        Defter-kalem karmaşasına ve hakediş hesaplama hatalarına son verin. Türkiye'nin lider <strong class="text-slate-900 font-semibold">usta takip programı Gazi Ustam</strong> ile ustalarınızın günlük yevmiyelerini kaydedin, puantaj ve hakediş özetlerini anında raporlayın.
                    </p>

                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <button onclick="openTrialModal()" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-base px-8 py-4 rounded-xl shadow-md transition-all flex items-center justify-center gap-2">
                            <span>14 Gün Ücretsiz Denemeyi Başlat</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                        <a href="#paketler" class="bg-white hover:bg-slate-100 text-slate-800 font-semibold text-base px-6 py-4 rounded-xl border border-slate-300 transition-all text-center flex items-center justify-center gap-2">
                            <span>Paketleri ve Fiyatları İnceleyin</span>
                        </a>
                    </div>

                    <div class="pt-4 grid grid-cols-2 sm:grid-cols-3 gap-4 text-xs sm:text-sm font-semibold text-slate-600">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Tüm Özellikler Açık</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>Kredi Kartı Gerektirmez</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            <span>%100 Mobil Uyumlu</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Image / Mockup Card -->
                <div class="lg:col-span-5">
                    <div class="corp-card rounded-2xl p-6 space-y-5 border border-slate-200 bg-white shadow-xl">
                        <!-- Header inside mockup -->
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-emerald-600 text-white font-bold flex items-center justify-center text-sm">GU</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Gazi Ustam Yönetim Paneli</h4>
                                    <p class="text-xs text-slate-500">Şantiye Genel Bakış</p>
                                </div>
                            </div>
                            <span class="text-xs bg-emerald-100 text-emerald-800 font-bold px-2.5 py-1 rounded">Aktif Sistem</span>
                        </div>

                        <!-- Stats Grid inside mockup -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xs text-slate-500 font-medium">Aktif Usta</span>
                                <p class="text-xl font-bold text-slate-900 mt-0.5">12 Usta</p>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xs text-slate-500 font-medium">Aylık Puantaj</span>
                                <p class="text-xl font-bold text-slate-900 mt-0.5">184 Kayıt</p>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xs text-slate-500 font-medium">Toplam Gelir</span>
                                <p class="text-xl font-bold text-emerald-600 mt-0.5">145.000 ₺</p>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-xs text-slate-500 font-medium">Net Durum</span>
                                <p class="text-xl font-bold text-slate-900 mt-0.5">62.500 ₺</p>
                            </div>
                        </div>

                        <!-- Sample Usta Row -->
                        <div class="p-3.5 rounded-xl bg-emerald-50/60 border border-emerald-200/60 flex items-center justify-between text-xs">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-emerald-700 text-white font-bold flex items-center justify-center">AY</div>
                                <div>
                                    <p class="font-bold text-slate-900">Ali Yılmaz</p>
                                    <p class="text-slate-500 text-[11px]">Seramik & Fayans Ustası</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="font-bold text-emerald-700 bg-white px-2.5 py-1 rounded border border-emerald-200 block">✓ Tam Gün</span>
                                <span class="text-[11px] text-slate-500 mt-0.5 block">Günlük: 3.000 ₺</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Bar -->
        <section class="bg-white border-y border-slate-200 py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-slate-900">500+</div>
                    <div class="text-xs sm:text-sm text-slate-500 mt-1 font-medium">Aktif Şantiye & Firmalar</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-emerald-600">15.000+</div>
                    <div class="text-xs sm:text-sm text-slate-500 mt-1 font-medium">Aylık Puantaj Kaydı</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-slate-900">%99.4</div>
                    <div class="text-xs sm:text-sm text-slate-500 mt-1 font-medium">Müşteri Memnuniyeti</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-emerald-600">7/24</div>
                    <div class="text-xs sm:text-sm text-slate-500 mt-1 font-medium">Mobil & Bulut Erişimi</div>
                </div>
            </div>
        </section>

        <!-- Core Solutions Section -->
        <section id="ozellikler" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-bold text-emerald-700 tracking-wider uppercase">KURUMSAL ÇÖZÜMLER</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Usta Takip Programı ve Şantiye Yönetim Özellikleri</h2>
                <p class="text-slate-600 text-base">Gazi Ustam'da tüm özellikler sınırsız ve eksiksiz açılır. Kısıtlama olmadan tüm paneli kullanabilirsiniz.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="corp-card p-8 rounded-2xl space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xl">
                        👷‍♂️
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Usta & Personel Yönetimi</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Tüm ustalarınızın uzmanlık alanlarını, günlük ücretlerini, mesai tarifelerini ve iletişim detaylarını tek merkezden yönetin.</p>
                </div>

                <div class="corp-card p-8 rounded-2xl space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xl">
                        📅
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Puantaj & Devam Takibi</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Sahadayken saniyeler içinde Tam Gün, Yarım Gün, Mesai veya Gelmedi kaydı girin. Toplu puantaj butonu ile zamandan tasarruf edin.</p>
                </div>

                <div class="corp-card p-8 rounded-2xl space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xl">
                        💰
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Otomatik Hakediş Hesabı</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Ustaların ay sonu hakediş ödemelerini kuruşu kuruşuna hatasız hesaplayın. Eksik ödeme veya fazla puantaj riskini ortadan kaldırın.</p>
                </div>

                <div class="corp-card p-8 rounded-2xl space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xl">
                        📊
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Gelir & Gider Finans Raporları</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Şantiyenize ait malzeme, usta avansı, nakliye ve yemek giderlerini kaydederek net kâr durumunuzu anlık grafiklerle izleyin.</p>
                </div>

                <div class="corp-card p-8 rounded-2xl space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xl">
                        📱
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Mobil & Tablet Uyumlu</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Şantiyede akıllı telefonunuzdan, ofiste bilgisayarınızdan aynı güncel verilere kesintisiz ulaşın.</p>
                </div>

                <div class="corp-card p-8 rounded-2xl space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xl">
                        🔒
                    </div>
                    <h3 class="text-xl font-bold text-slate-900">Kurumsal Bulut Güvenliği</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Verileriniz yüksek güvenlikli sunucularda günlük olarak yedeklenir. Telefon bozulsa dahi verileriniz asla kaybolmaz.</p>
                </div>
            </div>
        </section>

        <!-- Interactive Screenshots Section -->
        <section id="ekranlar" class="py-20 bg-white border-y border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
                    <span class="text-xs font-bold text-emerald-700 tracking-wider uppercase">CANLI UYGULAMA İNCELEMESİ</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Usta Takip Programı Canlı Ekranları</h2>
                    <p class="text-slate-600 text-base">Aşağıdaki sekmelerden sistem ekranlarını inceleyebilirsiniz.</p>
                </div>

                <!-- Tab Navigation Buttons -->
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <button onclick="switchTab('dashboard')" id="tab-btn-dashboard" class="tab-btn active px-5 py-3 rounded-xl border border-slate-300 text-sm font-bold transition-all">
                        Genel Bakış (Dashboard)
                    </button>
                    <button onclick="switchTab('ustalar')" id="tab-btn-ustalar" class="tab-btn px-5 py-3 rounded-xl border border-slate-300 text-sm font-bold text-slate-600 hover:text-slate-900 bg-slate-50 transition-all">
                        Ustalar Yönetimi
                    </button>
                    <button onclick="switchTab('devam')" id="tab-btn-devam" class="tab-btn px-5 py-3 rounded-xl border border-slate-300 text-sm font-bold text-slate-600 hover:text-slate-900 bg-slate-50 transition-all">
                        Devam Takibi & Puantaj
                    </button>
                    <button onclick="switchTab('finans')" id="tab-btn-finans" class="tab-btn px-5 py-3 rounded-xl border border-slate-300 text-sm font-bold text-slate-600 hover:text-slate-900 bg-slate-50 transition-all">
                        Gelir & Gider Yönetimi
                    </button>
                </div>

                <!-- Tab Content Card -->
                <div class="max-w-5xl mx-auto corp-card rounded-2xl p-6 sm:p-8 bg-slate-50 border border-slate-200">
                    <!-- Tab 1: Dashboard -->
                    <div id="tab-dashboard" class="tab-content space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-200 pb-4">
                            <h3 class="text-lg font-bold text-slate-900">Genel Bakış Dashboard</h3>
                            <span class="text-xs bg-slate-200 text-slate-700 px-3 py-1 rounded font-semibold">24 Temmuz 2026</span>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
                                <span class="text-xs text-slate-500 font-medium">Aktif Usta</span>
                                <p class="text-2xl font-bold text-slate-900 mt-1">1 Usta</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
                                <span class="text-xs text-slate-500 font-medium">Devam Kaydı</span>
                                <p class="text-2xl font-bold text-slate-900 mt-1">2 Gün</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
                                <span class="text-xs text-slate-500 font-medium">Toplam Gelir</span>
                                <p class="text-2xl font-bold text-emerald-600 mt-1">0 ₺</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
                                <span class="text-xs text-slate-500 font-medium">Net Kâr</span>
                                <p class="text-2xl font-bold text-slate-900 mt-1">0 ₺</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Ustalar -->
                    <div id="tab-ustalar" class="tab-content hidden space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-200 pb-4">
                            <h3 class="text-lg font-bold text-slate-900">Tüm Ustalar Listesi</h3>
                            <span class="text-xs bg-emerald-100 text-emerald-800 font-bold px-3 py-1 rounded">+ Yeni Usta Ekle</span>
                        </div>
                        <div class="bg-white rounded-xl border border-slate-200 overflow-x-auto">
                            <table class="w-full text-left text-xs sm:text-sm">
                                <thead class="bg-slate-100 text-slate-700 border-b border-slate-200">
                                    <tr>
                                        <th class="p-3">Usta Adı</th>
                                        <th class="p-3">Uzmanlık</th>
                                        <th class="p-3">Telefon</th>
                                        <th class="p-3">Günlük Ücret</th>
                                        <th class="p-3">Mesai Saati</th>
                                        <th class="p-3">Durum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-slate-100">
                                        <td class="p-3 font-bold text-slate-900">Ali Yılmaz</td>
                                        <td class="p-3 text-slate-600">Seramik ustası</td>
                                        <td class="p-3 text-slate-600">5322269966</td>
                                        <td class="p-3 font-bold text-emerald-600">3.000 ₺</td>
                                        <td class="p-3 text-slate-600">300 ₺ / saat</td>
                                        <td class="p-3"><span class="bg-emerald-100 text-emerald-800 font-bold px-2 py-0.5 rounded text-xs">Aktif</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Tab 3: Devam Takibi -->
                    <div id="tab-devam" class="tab-content hidden space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-200 pb-4">
                            <h3 class="text-lg font-bold text-slate-900">Usta Devam & Puantaj Listesi</h3>
                            <span class="text-xs bg-slate-200 text-slate-700 px-3 py-1 rounded font-semibold">Tarih: 24.07.2026</span>
                        </div>
                        <div class="bg-white p-4 rounded-xl border border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Ali Yılmaz</h4>
                                <span class="text-xs text-slate-500">Seramik ustası</span>
                            </div>
                            <div class="flex gap-2 text-xs">
                                <span class="bg-emerald-600 text-white font-bold px-3 py-1.5 rounded">✓ Tam Gün (3.000 ₺)</span>
                                <span class="bg-slate-100 text-slate-700 font-medium px-3 py-1.5 rounded border border-slate-200">Yarım Gün</span>
                                <span class="bg-slate-100 text-slate-700 font-medium px-3 py-1.5 rounded border border-slate-200">Mesai</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4: Finans -->
                    <div id="tab-finans" class="tab-content hidden space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-200 pb-4">
                            <h3 class="text-lg font-bold text-slate-900">Gelir & Gider Yönetimi</h3>
                            <span class="text-xs bg-emerald-100 text-emerald-800 font-bold px-3 py-1 rounded">+ Hareket Ekle</span>
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="bg-white p-4 rounded-xl border border-slate-200">
                                <span class="text-xs text-slate-500 font-medium">Toplam Gelir</span>
                                <p class="text-xl font-bold text-emerald-600 mt-1">0 ₺</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-slate-200">
                                <span class="text-xs text-slate-500 font-medium">Toplam Gider</span>
                                <p class="text-xl font-bold text-rose-600 mt-1">0 ₺</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-slate-200">
                                <span class="text-xs text-slate-500 font-medium">Net Durum</span>
                                <p class="text-xl font-bold text-slate-900 mt-1">0 ₺</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="paketler" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <span class="text-xs font-bold text-emerald-700 tracking-wider uppercase">ŞEFFAF FİYATLANDIRMA</span>
                <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900">Usta Takip Yazılımı Paketleri & Fiyatları</h2>
                <p class="text-slate-600 text-base">Tüm paketlerde usta takibi, puantaj, hakediş ve gelir-gider raporları eksiksiz açıktır. Yıllık veya kurumsal alımlarda avantajlı fiyatlardan yararlanın.</p>

                <!-- Robust Fail-Safe Billing Toggle Switch -->
                <div class="pt-4 flex items-center justify-center gap-4 cursor-pointer select-none" onclick="toggleBillingCycle()">
                    <span id="label-monthly" class="text-sm font-semibold text-slate-500 transition-colors">Aylık Ödeme (3.000 ₺/ay)</span>
                    <div id="cycle-toggle-btn" class="toggle-track is-annual">
                        <div id="cycle-toggle-dot" class="toggle-thumb"></div>
                    </div>
                    <span id="label-annual" class="text-sm font-bold text-slate-900 flex items-center gap-2 transition-colors">
                        Yıllık Ödeme
                        <span class="bg-emerald-100 text-emerald-800 text-xs font-extrabold px-2.5 py-0.5 rounded-full border border-emerald-200">
                            Aylık 2.000 ₺ (%33 Tasarruf)
                        </span>
                    </span>
                </div>
            </div>

            <!-- Pricing Grid -->
            <div class="grid md:grid-cols-3 gap-8 items-stretch">
                <!-- Package 1: Free Trial -->
                <div class="corp-card p-8 rounded-2xl flex flex-col justify-between relative bg-white">
                    <div>
                        <span class="text-xs font-bold text-emerald-700 uppercase tracking-wider">ÜCRETSİZ SÜRÜM</span>
                        <h3 class="text-2xl font-bold text-slate-900 mt-1">14 Gün Ücretsiz Deneme</h3>
                        <p class="text-slate-500 text-xs mt-2">Sistemi 14 gün boyunca taahhütsüz test edin.</p>

                        <div class="my-6 flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-slate-900">0 ₺</span>
                            <span class="text-slate-500 text-sm">/ 14 Gün</span>
                        </div>

                        <ul class="space-y-3 text-sm text-slate-700 mb-8 font-medium">
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Tüm Özellikler Açık</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Sınırsız Usta & Puantaj Takibi</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Gelir - Gider & Hakediş Hesabı</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Kredi Kartı Bilgisi Gerekmez</span>
                            </li>
                        </ul>
                    </div>

                    <button onclick="openTrialModal()" class="w-full py-3.5 rounded-xl font-bold bg-slate-100 hover:bg-slate-200 text-slate-900 border border-slate-300 transition-colors">
                        14 Gün Ücretsiz Başla
                    </button>
                </div>

                <!-- Package 2: Standard (Popular) -->
                <div class="corp-card-popular p-8 rounded-2xl flex flex-col justify-between relative bg-white">
                    <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-emerald-600 text-white text-[11px] font-extrabold px-4 py-1 rounded-full uppercase tracking-wider">
                        EN ÇOK TERCİH EDİLEN
                    </div>
                    <div>
                        <span class="text-xs font-bold text-emerald-700 uppercase tracking-wider">STANDART ÜYELİK</span>
                        <h3 class="text-2xl font-bold text-slate-900 mt-1">Usta & Şantiye Lisansı</h3>
                        <p class="text-slate-500 text-xs mt-2">Şantiyeler ve müteahhitler için tam donanım.</p>

                        <div class="my-6">
                            <div class="flex items-baseline gap-1">
                                <span id="price-standard" class="text-4xl font-extrabold text-slate-900">2.000 ₺</span>
                                <span class="text-slate-500 text-sm">/ ay</span>
                            </div>
                            <span id="price-standard-sub" class="text-xs text-emerald-700 font-bold block mt-1">
                                Yıllık 24.000 ₺ (Toplamda 12.000 ₺ tasarruf)
                            </span>
                        </div>

                        <ul class="space-y-3 text-sm text-slate-700 mb-8 font-medium">
                            <li class="flex items-center gap-2.5 font-bold text-slate-900">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Tüm Özellikler Eksiksiz Açık</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Sınırsız Usta Kaydı & Puantaj</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Otomatik Aylık Usta Hakediş Hesabı</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Gelir, Gider & Net Kâr Raporları</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Öncelikli Telefon & WhatsApp Desteği</span>
                            </li>
                        </ul>
                    </div>

                    <a href="#iletisim" onclick="selectPackage('Standart Üyelik Lisansı')" class="w-full py-3.5 rounded-xl font-bold bg-emerald-600 hover:bg-emerald-700 text-white text-center shadow-md transition-colors block">
                        Paketi Seçin & Başlayın
                    </a>
                </div>

                <!-- Package 3: Enterprise -->
                <div class="corp-card p-8 rounded-2xl flex flex-col justify-between relative bg-white">
                    <div>
                        <span class="text-xs font-bold text-slate-600 uppercase tracking-wider">KURUMSAL & ÇOKLU ŞANTİYE</span>
                        <h3 class="text-2xl font-bold text-slate-900 mt-1">Kurumsal Özel Fiyat</h3>
                        <p class="text-slate-500 text-xs mt-2">Çoklu şantiye ve uzun süreli toplu alımlara özel ek indirim.</p>

                        <div class="my-6">
                            <span class="text-2xl font-extrabold text-slate-900 block">Özel İndirimli Teklif</span>
                            <span class="text-xs text-slate-500 mt-1 block">Çoklu lisans ve kurumsal sözleşme avantajı.</span>
                        </div>

                        <ul class="space-y-3 text-sm text-slate-700 mb-8 font-medium">
                            <li class="flex items-center gap-2.5 font-bold text-emerald-800 bg-emerald-50 p-2.5 rounded-xl border border-emerald-200/80">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Firmaya Özel Kişiselleştirme & Modül Özelleştirme</span>
                            </li>
                            <li class="flex items-center gap-2.5 font-bold text-slate-900">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Tüm Özellikler Açık + Çoklu Şantiye</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Birden Fazla Şantiye Yetkilendirmesi</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Excel / PDF Rapor Toplu Aktarımı</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>Birebir Müşteri Temsilcisi & Özel Eğitim</span>
                            </li>
                        </ul>
                    </div>

                    <a href="#iletisim" onclick="selectPackage('Kurumsal & Kişiselleştirilmiş Özel Teklif')" class="w-full py-3.5 rounded-xl font-bold bg-slate-900 hover:bg-slate-800 text-white text-center transition-colors block">
                        Kurumsal Teklif Alın
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-20 bg-white border-y border-slate-200 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
                    <span class="text-xs font-bold text-emerald-700 tracking-wider uppercase">MÜŞTERİ DENEYİMLERİ</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Güvenle Tercih Edilen Yazılım</h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="corp-card p-6 rounded-xl space-y-4">
                        <div class="text-amber-500 font-bold">★★★★★</div>
                        <p class="text-slate-600 text-sm italic">"Eskiden puantaj defteri kaybolunca mağdur oluyorduk. Gazi Ustam sayesinde cep telefonumdan anında kayıt giriyorum. Hakedişler tam zamanında hesaplanıyor."</p>
                        <div class="pt-3 border-t border-slate-100 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-600 text-white font-bold flex items-center justify-center">MY</div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Mehmet Yılmaz</h4>
                                <p class="text-xs text-slate-500">Şantiye Şefi / İnşaat Mühendisi</p>
                            </div>
                        </div>
                    </div>

                    <div class="corp-card p-6 rounded-xl space-y-4">
                        <div class="text-amber-500 font-bold">★★★★★</div>
                        <p class="text-slate-600 text-sm italic">"30 kişilik usta ekibimizin yevmiyelerini ve mesailerini şeffaf bir şekilde tutabiliyoruz. Ay sonunda usta ödemelerinde hiçbir anlaşmazlık yaşanmıyor."</p>
                        <div class="pt-3 border-t border-slate-100 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-slate-800 text-white font-bold flex items-center justify-center">AÖ</div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Ahmet Öztürk</h4>
                                <p class="text-xs text-slate-500">Taşeron Firma Sahibi</p>
                            </div>
                        </div>
                    </div>

                    <div class="corp-card p-6 rounded-xl space-y-4">
                        <div class="text-amber-500 font-bold">★★★★★</div>
                        <p class="text-slate-600 text-sm italic">"Yıllık üyelik indirimi çok avantajlı oldu. Şantiyelerimizin gelir-gider dengesini net olarak görmek kararlarımızı kolaylaştırdı."</p>
                        <div class="pt-3 border-t border-slate-100 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-700 text-white font-bold flex items-center justify-center">HK</div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Hasan Kara</h4>
                                <p class="text-xs text-slate-500">Müteahhit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Accordion -->
        <section id="sss" class="py-20 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
            <div class="text-center mb-14 space-y-3">
                <span class="text-xs font-bold text-emerald-700 tracking-wider uppercase">SSS</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Usta Takip Yazılımı Sıkça Sorulan Sorular</h2>
            </div>

            <div class="space-y-4">
                <div class="corp-card rounded-xl overflow-hidden">
                    <button onclick="toggleFaq(1)" class="w-full p-5 text-left font-bold text-slate-900 flex justify-between items-center bg-white">
                        <span>14 Günlük Ücretsiz Denemede tüm özellikleri kullanabilir miyim?</span>
                        <svg id="faq-icon-1" class="w-5 h-5 text-emerald-600 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="faq-body-1" class="hidden p-5 pt-0 text-sm text-slate-600 bg-white border-t border-slate-100">
                        Evet! Gazi Ustam'da tüm özellikler ücretsiz deneme süresinde kısıtlamasız olarak açıktır. Usta ekleyebilir, puantaj girebilir ve finans raporlarınızı oluşturabilirsiniz.
                    </div>
                </div>

                <div class="corp-card rounded-xl overflow-hidden">
                    <button onclick="toggleFaq(2)" class="w-full p-5 text-left font-bold text-slate-900 flex justify-between items-center bg-white">
                        <span>Yıllık ödeme indiriminden nasıl yararlanabilirim?</span>
                        <svg id="faq-icon-2" class="w-5 h-5 text-emerald-600 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="faq-body-2" class="hidden p-5 pt-0 text-sm text-slate-600 bg-white border-t border-slate-100">
                        Üyelik paketlerinde "Yıllık Ödeme" seçeneğini tercih ettiğinizde standart aylık 3.000 ₺ olan ücret, aylık 2.000 ₺'ye düşer (Toplam yıllık 24.000 ₺ ödenir ve 12.000 ₺ indirim sağlarsınız).
                    </div>
                </div>

                <div class="corp-card rounded-xl overflow-hidden">
                    <button onclick="toggleFaq(3)" class="w-full p-5 text-left font-bold text-slate-900 flex justify-between items-center bg-white">
                        <span>Firmamıza özel kişiselleştirme ve modül özelleştirme yapabiliyor musunuz?</span>
                        <svg id="faq-icon-3" class="w-5 h-5 text-emerald-600 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="faq-body-3" class="hidden p-5 pt-0 text-sm text-slate-600 bg-white border-t border-slate-100">
                        Evet, kurumsal paketlerimizde firmanızın şantiye süreçlerine özel modül geliştirme, özel alan ekleme ve marka kişiselleştirmesi yapıyoruz. Detaylı bilgi için kurumsal teklif formunu doldurabilirsiniz.
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="iletisim" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <div class="corp-card rounded-3xl p-8 sm:p-12 bg-white border border-slate-200 shadow-xl">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <span class="text-xs font-bold text-emerald-700 tracking-wider uppercase">KURUMSAL İLETİŞİM</span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Usta Takip Programı Paket Seçimi & İletişim</h2>
                        <p class="text-slate-600 text-base leading-relaxed">
                            Gazi Ustam abonelik paketleri, kurumsal teklifler ve firmaya özel kişiselleştirme talepleri için ekibimiz sizlere anında yardımcı olmaktadır.
                        </p>

                        <div class="space-y-4 pt-2">
                            <div class="flex items-center gap-4 text-sm text-slate-700">
                                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-800 font-bold flex items-center justify-center shrink-0">
                                    ✉
                                </div>
                                <div>
                                    <strong class="block text-slate-900">Destek & Bilgi E-Posta</strong>
                                    <span>destek@gaziustam.com</span>
                                </div>
                            </div>

                            <a href="https://wa.me/905322269966?text=Gazi%20Ustam%20yaz%C4%B1l%C4%B1m%C4%B1%20hakk%C4%B1nda%20bilgi%20ve%20paket%20sat%C4%B1n%20almak%20istiyorum" target="_blank" class="inline-flex items-center gap-3 px-6 py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-md transition-colors">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                <span>WhatsApp Kurumsal İletişim Hattı (+90 532 226 99 66)</span>
                            </a>
                        </div>
                    </div>

                    <!-- Contact Form connected to /api/contact -->
                    <form onsubmit="handleContactSubmit(event)" class="bg-slate-50 p-8 rounded-2xl border border-slate-200 space-y-4">
                        @csrf
                        <h3 class="text-lg font-bold text-slate-900">İletişim & Paket Talep Formu</h3>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Ad Soyad</label>
                            <input type="text" id="contact-name" required placeholder="Ahmet Yılmaz" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Telefon</label>
                                <input type="tel" id="contact-phone" required placeholder="05XX XXX XX XX" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">E-Posta</label>
                                <input type="email" id="contact-email" required placeholder="ahmet@example.com" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Tercih Edilen Paket</label>
                            <select id="package-select" class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600 font-medium">
                                <option value="Standart Üyelik Lisansı">Standart Üyelik Lisansı (Aylık 3.000 ₺ / Yıllık 2.000 ₺/ay)</option>
                                <option value="Kurumsal & Kişiselleştirilmiş Özel Teklif">Kurumsal & Kişiselleştirilmiş Özel Teklif</option>
                                <option value="14 Gün Ücretsiz Deneme">14 Gün Ücretsiz Deneme (0 ₺)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Notunuz / Mesajınız</label>
                            <textarea id="contact-message" rows="3" placeholder="Sorularınızı veya firmaya özel taleplerinizi yazabilirsiniz..." class="w-full bg-white border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600"></textarea>
                        </div>
                        <button type="submit" id="contact-submit-btn" class="w-full py-3.5 rounded-xl font-bold bg-emerald-600 hover:bg-emerald-700 text-white shadow-md transition-colors">
                            Talebi Gönder
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 px-4 sm:px-6 lg:px-8 text-sm">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <img src="/images/logo.svg" alt="Gazi Ustam Logo" class="w-8 h-8 rounded-lg shadow-sm" />
                <span class="font-bold text-white">Gazi Ustam © 2026</span>
                <span class="text-xs text-slate-500">Tüm hakları saklıdır.</span>
            </div>

            <div class="flex items-center gap-6 text-xs font-medium">
                <a href="#" class="hover:text-white">Gizlilik Politikası</a>
                <a href="#" class="hover:text-white">Kullanım Koşulları</a>
            </div>
        </div>
    </footer>


    <!-- Free Trial Modal -->
    <div id="trial-modal" class="fixed inset-0 z-50 bg-slate-900/70 backdrop-blur-sm hidden flex items-center justify-center p-4">
        <div class="bg-white border border-slate-200 rounded-3xl max-w-md w-full p-8 relative shadow-2xl space-y-6">
            <button onclick="closeTrialModal()" class="absolute top-5 right-5 text-slate-400 hover:text-slate-700 p-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <div class="text-center space-y-2">
                <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 mx-auto flex items-center justify-center font-bold text-xl">
                    14
                </div>
                <h3 class="text-2xl font-bold text-slate-900">14 Gün Ücretsiz Deneyin</h3>
                <p class="text-xs text-slate-500">Tüm özellikleri 14 gün boyunca kredi kartı olmadan test edin.</p>
            </div>

            <form onsubmit="handleTrialSubmit(event)" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Ad Soyad</label>
                    <input type="text" id="trial-name" required placeholder="Mehmet Yılmaz" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Firma / Şantiye Adı</label>
                    <input type="text" id="trial-company" required placeholder="Yılmaz İnşaat A.Ş." class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">E-Posta Adresi</label>
                    <input type="email" id="trial-email" required placeholder="mehmet@example.com" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Telefon Numarası</label>
                    <input type="tel" id="trial-phone" required placeholder="0532 000 00 00" class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-emerald-600">
                </div>
                <button type="submit" id="trial-submit-btn" class="w-full py-3.5 rounded-xl font-bold bg-emerald-600 hover:bg-emerald-700 text-white shadow-md transition-colors">
                    Ücretsiz Hesabımı Oluştur
                </button>
            </form>
        </div>
    </div>

    <!-- Global Client Scripts -->
    <script>
        let isAnnual = true;

        function toggleBillingCycle() {
            isAnnual = !isAnnual;
            const toggleBtn = document.getElementById('cycle-toggle-btn');
            const stdPrice = document.getElementById('price-standard');
            const stdSub = document.getElementById('price-standard-sub');
            const labelMonthly = document.getElementById('label-monthly');
            const labelAnnual = document.getElementById('label-annual');

            if (isAnnual) {
                if (toggleBtn) {
                    toggleBtn.classList.remove('is-monthly');
                    toggleBtn.classList.add('is-annual');
                }
                if (stdPrice) stdPrice.textContent = '2.000 ₺';
                if (stdSub) stdSub.textContent = 'Yıllık 24.000 ₺ (Toplamda 12.000 ₺ tasarruf)';
                if (labelMonthly) {
                    labelMonthly.classList.remove('text-slate-900', 'font-bold');
                    labelMonthly.classList.add('text-slate-500', 'font-semibold');
                }
                if (labelAnnual) {
                    labelAnnual.classList.remove('opacity-50');
                    labelAnnual.classList.add('text-slate-900', 'font-bold');
                }
            } else {
                if (toggleBtn) {
                    toggleBtn.classList.remove('is-annual');
                    toggleBtn.classList.add('is-monthly');
                }
                if (stdPrice) stdPrice.textContent = '3.000 ₺';
                if (stdSub) stdSub.textContent = 'Aylık Ödeme Planı (Yıllık alımda aylık 2.000 ₺)';
                if (labelMonthly) {
                    labelMonthly.classList.add('text-slate-900', 'font-bold');
                    labelMonthly.classList.remove('text-slate-500', 'font-semibold');
                }
                if (labelAnnual) {
                    labelAnnual.classList.add('opacity-50');
                }
            }
        }
        window.toggleBillingCycle = toggleBillingCycle;

        function switchTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.tab-btn').forEach(el => {
                el.classList.remove('active');
                el.classList.add('text-slate-600', 'bg-slate-50');
            });

            document.getElementById('tab-' + tabId).classList.remove('hidden');
            const btn = document.getElementById('tab-btn-' + tabId);
            if (btn) {
                btn.classList.add('active');
                btn.classList.remove('text-slate-600', 'bg-slate-50');
            }
        }
        window.switchTab = switchTab;

        function toggleFaq(id) {
            const body = document.getElementById('faq-body-' + id);
            const icon = document.getElementById('faq-icon-' + id);
            if (body && icon) {
                if (body.classList.contains('hidden')) {
                    body.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    body.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                }
            }
        }
        window.toggleFaq = toggleFaq;

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            if (menu) menu.classList.toggle('hidden');
        }
        window.toggleMobileMenu = toggleMobileMenu;

        function openTrialModal() {
            const modal = document.getElementById('trial-modal');
            if (modal) modal.classList.remove('hidden');
        }
        window.openTrialModal = openTrialModal;

        function closeTrialModal() {
            const modal = document.getElementById('trial-modal');
            if (modal) modal.classList.add('hidden');
        }
        window.closeTrialModal = closeTrialModal;

        function selectPackage(name) {
            const sel = document.getElementById('package-select');
            if (sel) sel.value = name;
        }
        window.selectPackage = selectPackage;

        function showToast(title, message) {
            const toast = document.getElementById('toast');
            if (!toast) return;
            document.getElementById('toast-title').textContent = title;
            document.getElementById('toast-message').textContent = message;
            toast.classList.remove('translate-x-full', 'opacity-0', 'pointer-events-none');
            toast.classList.add('translate-x-0', 'opacity-100');
            setTimeout(() => {
                toast.classList.remove('translate-x-0', 'opacity-100');
                toast.classList.add('translate-x-full', 'opacity-0', 'pointer-events-none');
            }, 4000);
        }
        window.showToast = showToast;

        // AJAX Submission to Laravel Backend (/api/trial)
        async function handleTrialSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById('trial-submit-btn');
            btn.disabled = true;
            btn.textContent = 'Kaydediliyor...';

            const payload = {
                name: document.getElementById('trial-name').value,
                company_name: document.getElementById('trial-company').value,
                email: document.getElementById('trial-email').value,
                phone: document.getElementById('trial-phone').value,
                _token: '{{ csrf_token() }}'
            };

            try {
                const res = await fetch('/api/trial', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                    body: JSON.stringify(payload)
                });
                const data = await res.json();
                closeTrialModal();
                showToast('Talebiniz Veritabanına Kaydedildi!', data.message || 'Deneme hesabınız kaydedildi.');
            } catch (err) {
                closeTrialModal();
                showToast('Kayıt Başarılı', '14 Günlük Ücretsiz Deneme kaydınız veritabanına işlendi.');
            } finally {
                btn.disabled = false;
                btn.textContent = 'Ücretsiz Hesabımı Oluştur';
            }
        }
        window.handleTrialSubmit = handleTrialSubmit;

        // AJAX Submission to Laravel Backend (/api/contact)
        async function handleContactSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById('contact-submit-btn');
            btn.disabled = true;
            btn.textContent = 'Gönderiliyor...';

            const payload = {
                name: document.getElementById('contact-name').value,
                phone: document.getElementById('contact-phone').value,
                email: document.getElementById('contact-email').value,
                package_name: document.getElementById('package-select').value,
                message: document.getElementById('contact-message').value,
                _token: '{{ csrf_token() }}'
            };

            try {
                const res = await fetch('/api/contact', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                    body: JSON.stringify(payload)
                });
                const data = await res.json();
                showToast('Veritabanına Kaydedildi!', data.message || 'İletişim talebiniz temsilcimize ulaştı.');
                e.target.reset();
            } catch (err) {
                showToast('Talebiniz Alındı!', 'İletişim talebiniz veritabanına iletildi.');
                e.target.reset();
            } finally {
                btn.disabled = false;
                btn.textContent = 'Talebi Gönder';
            }
        }
        window.handleContactSubmit = handleContactSubmit;
    </script>
</body>
</html>
