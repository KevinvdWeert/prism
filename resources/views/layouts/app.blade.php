<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- SEO Meta Tags --}}
    <title>@yield('title', 'Eline - Tijdloze Sierraden Handgemaakt Voor Jou | Luxe Diamanten Ringen')</title>
    <meta name="description" content="@yield('description', 'Ontdek Eline's collectie van unieke handgemaakte sierraden. Lab-grown diamanten, ethisch geproduceerd. Solitair ringen, princess hangers, emerald oorbellen en classics collectie.')">
    <meta name="keywords" content="@yield('keywords', 'sierraden, diamanten, ringen, hangers, oorbellen, lab-grown diamanten, ethische sierraden, handgemaakt, luxe sierraden, man made diamonds, eline sieraden')">
    <meta name="author" content="Eline Sieraden">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    
    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="@yield('og_title', 'Eline - Luxe Handgemaakte Sierraden | Lab-Grown Diamanten')">
    <meta property="og:description" content="@yield('og_description', 'Tijdloze sierraden, handgemaakt voor jou. Ontdek onze collectie van ethische lab-grown diamanten en unieke sierraden.')">
    <meta property="og:image" content="@yield('og_image', '{{ get_theme_file_uri('resources/images/stones.jpg') }}')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="Eline Sieraden">
    <meta property="og:locale" content="nl_NL">
    
    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Eline - Luxe Handgemaakte Sierraden')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Tijdloze sierraden, handgemaakt voor jou. Lab-grown diamanten, ethisch geproduceerd.')">
    <meta name="twitter:image" content="@yield('twitter_image', '{{ get_theme_file_uri('resources/images/stones.jpg') }}')">
    
    {{-- Favicon and Apple Touch Icon --}}
    <link rel="icon" type="image/x-icon" href="{{ get_theme_file_uri('resources/images/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ get_theme_file_uri('resources/images/apple-touch-icon.png') }}">
    
    {{-- Schema.org JSON-LD Structured Data --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "JewelryStore",
      "name": "Eline Sieraden",
      "description": "Luxe handgemaakte sierraden met lab-grown diamanten. Tijdloze designs, ethisch geproduceerd.",
      "url": "{{ home_url() }}",
      "logo": "{{ get_theme_file_uri('resources/images/logo.png') }}",
      "image": "{{ get_theme_file_uri('resources/images/stones.jpg') }}",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "NL",
        "addressLocality": "Amsterdam"
      },
      "sameAs": [
        "https://www.instagram.com/elinesieraden",
        "https://www.facebook.com/elinesieraden"
      ],
      "offers": {
        "@type": "AggregateOffer",
        "description": "Handgemaakte sierraden collectie",
        "priceCurrency": "EUR"
      },
      "brand": {
        "@type": "Brand",
        "name": "Eline"
      }
    }
    </script>
    
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body @php(body_class())>
    @php(wp_body_open())

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content', 'sage') }}
      </a>

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
