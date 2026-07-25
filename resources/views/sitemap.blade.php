{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    
    <!-- Ana Sayfa (Home) -->
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>

    <!-- Özellikler Bölümü -->
    <url>
        <loc>{{ url('/#ozellikler') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>

    <!-- Canlı Ekranlar Bölümü -->
    <url>
        <loc>{{ url('/#ekranlar') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>

    <!-- Üyelik Paketleri Bölümü -->
    <url>
        <loc>{{ url('/#paketler') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>

    <!-- Sıkça Sorulan Sorular (SSS) -->
    <url>
        <loc>{{ url('/#sss') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.60</priority>
    </url>

    <!-- İletişim Bölümü -->
    <url>
        <loc>{{ url('/#iletisim') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.70</priority>
    </url>

</urlset>
