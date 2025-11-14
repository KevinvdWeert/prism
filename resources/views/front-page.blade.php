@extends('layouts.app')

@section('title', 'Eline Sieraden - Handgemaakte Luxe Sierraden | Lab-Grown Diamanten | Tijdloze Collectie')

@section('description')
Ontdek Eline's exclusieve collectie handgemaakte sierraden met lab-grown diamanten. Solitair ringen, princess hangers, emerald oorbellen. Ethisch geproduceerd, tijdloos design. Gratis verzending in Nederland.
@endsection

@section('keywords')
eline sieraden, handgemaakte sierraden, lab-grown diamanten, man made diamonds, solitair ring, princess hanger, emerald oorbellen, classics ring, ethische sierraden, luxe sieraden Nederland, diamanten ringen Amsterdam
@endsection

@section('content')
  {{-- Hero Section --}}
  <section class="relative min-h-screen overflow-hidden" 
           itemscope itemtype="https://schema.org/Product"
           style="background: linear-gradient(rgba(248, 250, 252, 0.95), rgba(226, 232, 240, 0.95)), url('{{ get_theme_file_uri('resources/images/hero-background.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    
    <div class="container mx-auto px-6 py-20 relative z-10">
      <div class="grid md:grid-cols-2 gap-16 items-center min-h-[80vh]">
        {{-- Left: Text Content --}}
        <div class="space-y-8">
          <header>
            <h1 class="text-5xl md:text-6xl font-extralight text-gray-900 leading-tight tracking-wide heading-luxury" itemprop="name">
              tijdloze sierraden,<br>
              <span class="text-gray-600">handgemaakt voor jou</span>
            </h1>
          </header>
          <div class="flex flex-col sm:flex-row gap-4">
            <button class="bg-black text-white px-8 py-4 text-sm font-medium uppercase tracking-widest hover:bg-gray-800 transition duration-500 transform hover:scale-105" aria-label="Bekijk onze complete sierraden collectie">
              SHOP COLLECTIE
            </button>
            <button class="text-gray-600 text-sm font-medium uppercase tracking-widest underline hover:text-black transition duration-300" aria-label="Meer informatie over onze handgemaakte sierraden">
              MEER INFO
            </button>
          </div>
        </div>
        
        {{-- Right: Hero Images --}}
        <div class="relative parallax-container" role="img" aria-label="Luxe diamanten ringen collectie">
          <div class="grid grid-cols-2 gap-4">
            <div class="space-y-4">
              <div class="bg-white p-8 rounded-2xl shadow-lg transform rotate-3 hover:rotate-0 transition duration-500 parallax-element" data-speed="0.3">
                <img src="{{ get_theme_file_uri('resources/images/ring1.png') }}" 
                     alt="Handgemaakte diamanten ring met lab-grown diamant" 
                     class="w-full h-48 object-cover rounded-lg transform hover:scale-110 transition duration-700"
                     itemprop="image"
                     loading="eager"
                     width="240" height="192">
              </div>
            </div>
            <div class="space-y-4 mt-8">
              <div class="bg-white p-8 rounded-2xl shadow-lg transform -rotate-3 hover:rotate-0 transition duration-500 parallax-element" data-speed="0.2">
                <img src="{{ get_theme_file_uri('resources/images/ring2.png') }}" 
                     alt="Elegante solitair diamanten ring" 
                     class="w-full h-48 object-cover rounded-lg transform hover:scale-110 transition duration-700"
                     loading="eager"
                     width="240" height="192">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Popular Products Section --}}
  <section class="py-20 bg-white" itemscope itemtype="https://schema.org/ItemList" aria-labelledby="popular-products">
    <div class="container mx-auto px-6">
      <header>
        <h2 id="popular-products" class="text-3xl font-extralight text-center text-gray-900 mb-16 tracking-wide" itemprop="name">populaire producten</h2>
      </header>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-6xl mx-auto" role="list">
        {{-- Product 1: Aurum Ring --}}
        <article class="group cursor-pointer text-center" itemscope itemtype="https://schema.org/Product" role="listitem">
          <div class="bg-gray-50 rounded-2xl p-8 mb-6 group-hover:bg-gray-100 transition duration-500 transform group-hover:scale-105 relative overflow-hidden">
            <div class="absolute top-4 left-4 bg-white bg-opacity-90 backdrop-blur-sm px-2 py-1 rounded text-xs font-medium text-gray-700 uppercase tracking-wide">
              nieuw
            </div>
            <img src="{{ get_theme_file_uri('resources/images/aurum-ring.jpg') }}" 
                 alt="Aurum diamanten ring - Handgemaakt door Eline" 
                 class="w-full h-40 object-cover rounded-lg mb-4"
                 itemprop="image"
                 loading="lazy"
                 width="200" height="160">
          </div>
          
          <div class="space-y-4">
            <h3 class="font-light text-gray-900 mb-2 tracking-wide" itemprop="name">aurum - ring</h3>
            <div class="mb-4">
              <span class="text-lg font-extralight text-gray-900" itemprop="price" content="2400">2.400,-</span>
            </div>
            <button class="text-sm text-gray-600 border border-gray-300 px-6 py-2 rounded-full hover:bg-gray-50 transition duration-300 tracking-wide" 
                    aria-label="Bekijk aurum ring details">
              bekijk product
            </button>
          </div>
          
          <meta itemprop="priceCurrency" content="EUR">
          <meta itemprop="availability" content="https://schema.org/InStock">
        </article>

        {{-- Product 2: Eclipse Hanger --}}
        <article class="group cursor-pointer text-center" itemscope itemtype="https://schema.org/Product" role="listitem">
          <div class="bg-gray-50 rounded-2xl p-8 mb-6 group-hover:bg-gray-100 transition duration-500 transform group-hover:scale-105 relative overflow-hidden">
            <div class="absolute top-4 left-4 bg-white bg-opacity-90 backdrop-blur-sm px-2 py-1 rounded text-xs font-medium text-gray-700 uppercase tracking-wide">
              nieuw
            </div>
            <img src="{{ get_theme_file_uri('resources/images/eclipse-hanger.jpg') }}" 
                 alt="Eclipse diamanten hanger - Handgemaakt door Eline" 
                 class="w-full h-40 object-cover rounded-lg mb-4"
                 itemprop="image"
                 loading="lazy"
                 width="200" height="160">
          </div>
          
          <div class="space-y-4">
            <h3 class="font-light text-gray-900 mb-2 tracking-wide" itemprop="name">eclipse - hanger</h3>
            <div class="mb-4">
              <span class="text-lg font-extralight text-gray-900" itemprop="price" content="2750">2.750,-</span>
            </div>
            <button class="text-sm text-gray-600 border border-gray-300 px-6 py-2 rounded-full hover:bg-gray-50 transition duration-300 tracking-wide" 
                    aria-label="Bekijk eclipse hanger details">
              bekijk product
            </button>
          </div>
          
          <meta itemprop="priceCurrency" content="EUR">
          <meta itemprop="availability" content="https://schema.org/InStock">
        </article>

        {{-- Product 3: Celeste Oorbel --}}
        <article class="group cursor-pointer text-center" itemscope itemtype="https://schema.org/Product" role="listitem">
          <div class="bg-gray-50 rounded-2xl p-8 mb-6 group-hover:bg-gray-100 transition duration-500 transform group-hover:scale-105 relative overflow-hidden">
            <img src="{{ get_theme_file_uri('resources/images/celeste-oorbel.jpg') }}" 
                 alt="Celeste diamanten oorbellen - Handgemaakt door Eline" 
                 class="w-full h-40 object-cover rounded-lg mb-4"
                 itemprop="image"
                 loading="lazy"
                 width="200" height="160">
          </div>
          
          <div class="space-y-4">
            <h3 class="font-light text-gray-900 mb-2 tracking-wide" itemprop="name">celeste - oorbel</h3>
            <div class="mb-4">
              <span class="text-lg font-extralight text-gray-900" itemprop="price" content="2950">2.950,-</span>
            </div>
            <button class="text-sm text-gray-600 border border-gray-300 px-6 py-2 rounded-full hover:bg-gray-50 transition duration-300 tracking-wide" 
                    aria-label="Bekijk celeste oorbellen details">
              bekijk product
            </button>
          </div>
          
          <meta itemprop="priceCurrency" content="EUR">
          <meta itemprop="availability" content="https://schema.org/InStock">
        </article>

        {{-- Product 4: Obsidian Ring --}}
        <article class="group cursor-pointer text-center" itemscope itemtype="https://schema.org/Product" role="listitem">
          <div class="bg-gray-50 rounded-2xl p-8 mb-6 group-hover:bg-gray-100 transition duration-500 transform group-hover:scale-105 relative overflow-hidden">
            <img src="{{ get_theme_file_uri('resources/images/obsidian-ring.jpg') }}" 
                 alt="Obsidian diamanten ring - Handgemaakt door Eline" 
                 class="w-full h-40 object-cover rounded-lg mb-4"
                 itemprop="image"
                 loading="lazy"
                 width="200" height="160">
          </div>
          
          <div class="space-y-4">
            <h3 class="font-light text-gray-900 mb-2 tracking-wide" itemprop="name">obsidian - ring</h3>
            <div class="mb-4">
              <span class="text-lg font-extralight text-gray-900" itemprop="price" content="1975">1.975,-</span>
            </div>
            <button class="text-sm text-gray-600 border border-gray-300 px-6 py-2 rounded-full hover:bg-gray-50 transition duration-300 tracking-wide" 
                    aria-label="Bekijk obsidian ring details">
              bekijk product
            </button>
          </div>
          
          <meta itemprop="priceCurrency" content="EUR">
          <meta itemprop="availability" content="https://schema.org/InStock">
        </article>
      </div>
      
      {{-- Features below products --}}
      <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-12 mt-16 text-sm text-gray-600">
        <div class="flex items-center space-x-2">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          <span>handgemaakt in Nederland</span>
        </div>
        <div class="flex items-center space-x-2">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
          </svg>
          <span>elk stieraad is uniek</span>
        </div>
        <div class="flex items-center space-x-2">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
          </svg>
          <span>in 2 werkdagen verzonden</span>
        </div>
      </div>
      
      {{-- View All Products Button --}}
      <div class="text-center mt-12">
        <a href="{{ home_url('/collectie') }}" 
           class="inline-block bg-gray-100 text-gray-800 px-8 py-4 text-sm font-medium uppercase tracking-widest hover:bg-gray-200 transition duration-300"
           aria-label="Bekijk volledige sierraden collectie">
          Bekijk Alle Producten
        </a>
      </div>
    </div>
  </section>

  {{-- Man Made Diamonds Section --}}
  <section class="py-20 bg-gradient-to-br from-gray-50 to-white" itemscope itemtype="https://schema.org/Product" aria-labelledby="man-made-diamonds">
    <div class="container mx-auto px-6">
      <div class="grid md:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
        {{-- Left: Model Image --}}
        <div class="relative">
          <div class="rounded-3xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-700">
            <img src="{{ get_theme_file_uri('resources/images/model.jpg') }}" 
                 alt="Model draagt Eline handgemaakte sieraden met lab-grown diamanten - Ethische luxe sierraden" 
                 class="w-full h-[600px] object-cover"
                 itemprop="image"
                 loading="lazy"
                 width="600" height="600">
          </div>
        </div>
        
        {{-- Right: Content --}}
        <div class="space-y-8">
          <header>
            <h2 id="man-made-diamonds" class="text-4xl font-extralight text-gray-900 tracking-wide leading-tight" itemprop="name">man made diamonds</h2>
          </header>
          <div class="space-y-6 text-gray-600 text-lg leading-relaxed" itemprop="description">
            <p>
              Dolor voluptate irure ad sint proident deserunt ullamco laboris aute. Culpa magna excepteur nisi sunt mollit eu officia incididunt esse exercitation labore. Id laborum tempor Lorem fugiat amet mollit cillum ex voluptate consectetur velit sunt id. Fugiat irure aliqua amet aliqua nulla. Officia elit consequat aliquip tempor laboris non Lorem laboris deserunt.
            </p>
          </div>
          <div class="flex flex-col sm:flex-row gap-4">
            <button class="bg-black text-white px-8 py-4 text-sm font-medium uppercase tracking-widest hover:bg-gray-800 transition duration-500 transform hover:scale-105" aria-label="Ontdek meer over onze lab-grown diamanten collectie">
              BEKIJK DE COLLECTIE
            </button>
            <button class="text-gray-600 text-sm font-medium uppercase tracking-widest underline hover:text-black transition duration-300" aria-label="Meer informatie over ethische diamanten">
              OVER BLNG
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection