@extends('layouts.app')

@section('title', 'Eline - Tijdloze Sierraden, Handgemaakt voor jou')

@section('description')
Ontdek Eline's exclusieve collectie handgemaakte sierraden met lab-grown diamanten. Unieke ringen, hangers en oorbellen. Ethisch geproduceerd, tijdloos design. Gratis verzending in Nederland.
@endsection

@section('keywords')
eline sieraden, handgemaakte sierraden, lab-grown diamanten, man made diamonds, ringen, hangers, oorbellen, ethische sierraden, luxe sierraden Nederland
@endsection

@section('content')
  <main id="main-content">
    {{-- Hero Section --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-gray-50 to-white" 
             itemscope itemtype="https://schema.org/JewelryStore">
      
      {{-- Hero Background Image --}}
      <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ get_theme_file_uri('resources/images/hero-background.jpg') }}" 
             alt="" 
             class="w-full h-full object-cover opacity-20"
             loading="eager">
      </div>

      <div class="relative z-10 container mx-auto px-6 py-16 lg:py-24">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          {{-- Left: Text Content --}}
          <div class="space-y-8 text-center lg:text-left">
            <div data-aos="fade-up" data-aos-delay="200">
              <h1 class="text-5xl lg:text-6xl xl:text-7xl font-light text-slate-900 leading-tight tracking-tight" 
                  itemprop="name">
                tijdloze sieraden,<br>
                <span class="text-slate-700">handgemaakt voor jou</span>
              </h1>
            </div>
            
            <div data-aos="fade-up" data-aos-delay="300">
              <p class="text-lg text-slate-600 leading-relaxed max-w-lg mx-auto lg:mx-0">
                Shop binnen in de wereld van luxe vakmanschap, waar innovatie en elegantie samenkomen. Elk sieraad is met de hand vervaardigd uit de fijnste materialen.
              </p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start" 
                 data-aos="fade-up" data-aos-delay="400">
              <button class="bg-slate-900 text-white px-8 py-4 text-sm font-medium tracking-wider uppercase hover:bg-slate-800 transition-all duration-300 shadow-lg hover:shadow-xl" 
                      aria-label="Bekijk onze complete sierraden collectie">
                Shop Collectie
              </button>
              <button class="border-2 border-slate-900 text-slate-900 px-8 py-4 text-sm font-medium tracking-wider uppercase hover:bg-slate-900 hover:text-white transition-all duration-300" 
                      aria-label="Meer informatie over onze handgemaakte sierraden">
                Meer Info
              </button>
            </div>
          </div>
          
          {{-- Right: Hero Images --}}
          <div class="relative" 
               role="img" 
               aria-label="Luxe diamanten ringen collectie"
               data-aos="fade-left" 
               data-aos-delay="600">
            <div class="grid grid-cols-2 gap-6 max-w-lg mx-auto">
              <div class="space-y-6">
                <div>
                  <img src="{{ get_theme_file_uri('resources/images/ring1.png') }}" 
                       alt="Handgemaakte diamanten ring met lab-grown diamant" 
                       class="w-full h-40 object-cover rounded-xl"
                       itemprop="image"
                       loading="eager"
                       width="200" height="160">
                </div>
              </div>
              <div class="space-y-6 pt-8">
                <div>
                  <img src="{{ get_theme_file_uri('resources/images/ring2.png') }}" 
                       alt="Elegante solitair diamanten ring" 
                       class="w-full h-40 object-cover rounded-xl"
                       loading="eager"
                       width="200" height="160">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Popular Products Section --}}
    <section class="py-12 bg-white" 
             itemscope itemtype="https://schema.org/ItemList" 
             aria-labelledby="popular-products"
             data-aos="fade-up">
      <div class="container mx-auto px-6">
        <header class="text-center mb-16">
          <h2 id="popular-products" 
              class="text-4xl font-extralight text-slate-900 tracking-wide heading-luxury" 
              itemprop="name">
            populaire producten
          </h2>
        </header>
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto product-grid" role="list">
          {{-- Product 1: Aurum Ring --}}
          <article class="group cursor-pointer text-center product-card" 
                   itemscope itemtype="https://schema.org/Product" 
                   role="listitem"
                   data-aos="fade-up" 
                   data-aos-delay="100">
            <div class="bg-gray-50/80 backdrop-blur-sm rounded-3xl p-8 mb-6 group-hover:bg-gray-100/80 transition-all duration-500 transform group-hover:scale-105 relative overflow-hidden shadow-jewelry hover:shadow-jewelry-hover">
              <img src="{{ get_theme_file_uri('resources/images/aurum-ring.jpg') }}" 
                   alt="Aurum ring" 
                   class="w-full h-40 object-cover rounded-2xl mb-4 transition-transform duration-700"
                   itemprop="image"
                   loading="lazy"
                   width="200" height="160">
            </div>
            
            <div class="space-y-4">
              <h3 class="font-light text-slate-900 text-lg tracking-wide text-luxury" itemprop="name">
                aurum - ring
              </h3>
              <div class="mb-4">
                <span class="text-xl font-extralight text-slate-900" itemprop="price" content="2400">
                  2.400,-
                </span>
              </div>
              <button class="btn-outline-jewelry" 
                      aria-label="Bekijk aurum ring details">
                bekijk product
              </button>
            </div>
            
            <meta itemprop="priceCurrency" content="EUR">
            <meta itemprop="availability" content="https://schema.org/InStock">
          </article>

          {{-- Product 2: Eclipse Hanger --}}
          <article class="group cursor-pointer text-center product-card" 
                   itemscope itemtype="https://schema.org/Product" 
                   role="listitem"
                   data-aos="fade-up" 
                   data-aos-delay="200">
            <div class="bg-gray-50/80 backdrop-blur-sm rounded-3xl p-8 mb-6 group-hover:bg-gray-100/80 transition-all duration-500 transform group-hover:scale-105 relative overflow-hidden shadow-jewelry hover:shadow-jewelry-hover">
              <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-medium text-slate-700 uppercase tracking-wide shadow-sm">
                nieuw
              </div>
              <img src="{{ get_theme_file_uri('resources/images/eclipse-hanger.jpg') }}" 
                   alt="Eclipse hanger" 
                   class="w-full h-40 object-cover rounded-2xl mb-4 transition-transform duration-700"
                   itemprop="image"
                   loading="lazy"
                   width="200" height="160">
            </div>
            
            <div class="space-y-4">
              <h3 class="font-light text-slate-900 text-lg tracking-wide text-luxury" itemprop="name">
                eclipse - hanger
              </h3>
              <div class="mb-4">
                <span class="text-xl font-extralight text-slate-900" itemprop="price" content="2750">
                  2.750,-
                </span>
              </div>
              <button class="btn-outline-jewelry" 
                      aria-label="Bekijk eclipse hanger details">
                bekijk product
              </button>
            </div>
            
            <meta itemprop="priceCurrency" content="EUR">
            <meta itemprop="availability" content="https://schema.org/InStock">
          </article>

          {{-- Product 3: Celeste Oorbel --}}
          <article class="group cursor-pointer text-center product-card" 
                   itemscope itemtype="https://schema.org/Product" 
                   role="listitem"
                   data-aos="fade-up" 
                   data-aos-delay="300">
            <div class="bg-gray-50/80 backdrop-blur-sm rounded-3xl p-8 mb-6 group-hover:bg-gray-100/80 transition-all duration-500 transform group-hover:scale-105 relative overflow-hidden shadow-jewelry hover:shadow-jewelry-hover">
              <img src="{{ get_theme_file_uri('resources/images/celeste-oorbel.jpg') }}" 
                   alt="Celeste  oorbel" 
                   class="w-full h-40 object-cover rounded-2xl mb-4 transition-transform duration-700"
                   itemprop="image"
                   loading="lazy"
                   width="200" height="160">
            </div>
            
            <div class="space-y-4">
              <h3 class="font-light text-slate-900 text-lg tracking-wide text-luxury" itemprop="name">
                celeste - oorbel
              </h3>
              <div class="mb-4">
                <span class="text-xl font-extralight text-slate-900" itemprop="price" content="2950">
                  2.950,-
                </span>
              </div>
              <button class="btn-outline-jewelry" 
                      aria-label="Bekijk celeste oorbellen details">
                bekijk product
              </button>
            </div>
            
            <meta itemprop="priceCurrency" content="EUR">
            <meta itemprop="availability" content="https://schema.org/InStock">
          </article>

          {{-- Product 4: Obsidian Ring --}}
          <article class="group cursor-pointer text-center product-card" 
                   itemscope itemtype="https://schema.org/Product" 
                   role="listitem"
                   data-aos="fade-up" 
                   data-aos-delay="400">
            <div class="bg-gray-50/80 backdrop-blur-sm rounded-3xl p-8 mb-6 group-hover:bg-gray-100/80 transition-all duration-500 transform group-hover:scale-105 relative overflow-hidden shadow-jewelry hover:shadow-jewelry-hover">
              <img src="{{ get_theme_file_uri('resources/images/obsidian-ring.jpg') }}" 
                   alt="Obsidian ring" 
                   class="w-full h-40 object-cover rounded-2xl mb-4 transition-transform duration-700"
                   itemprop="image"
                   loading="lazy"
                   width="200" height="160">
            </div>
            
            <div class="space-y-4">
              <h3 class="font-light text-slate-900 text-lg tracking-wide text-luxury" itemprop="name">
                obsidian - ring
              </h3>
              <div class="mb-4">
                <span class="text-xl font-extralight text-slate-900" itemprop="price" content="1975">
                  1.975,-
                </span>
              </div>
              <button class="btn-outline-jewelry" 
                      aria-label="Bekijk obsidian ring details">
                bekijk product
              </button>
            </div>
            
            <meta itemprop="priceCurrency" content="EUR">
            <meta itemprop="availability" content="https://schema.org/InStock">
          </article>
        </div>
        
        {{-- Features below products --}}
        <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-12 mt-16 text-sm text-slate-600"
             data-aos="fade-up" 
             data-aos-delay="600">
          <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="tracking-wide">handgemaakt in Nederland</span>
          </div>
          <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="tracking-wide">elk sieraad is uniek</span>
          </div>
          <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="tracking-wide">in 2 werkdagen verzonden</span>
          </div>
        </div>
      </div>
    </section>

    {{-- Man Made Diamonds Section --}}
    <section class="py-20 bg-gradient-to-br from-slate-50 to-white" 
             itemscope itemtype="https://schema.org/Product" 
             aria-labelledby="man-made-diamonds"
             data-aos="fade-up">
      <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
          {{-- Left: Model Image --}}
          <div class="relative" data-aos="fade-right" data-aos-delay="200">
            <div class="overflow-hidden transform hover:scale-105 transition-transform duration-700 bg-gradient-to-br from-white to-slate-50 p-2">
              <img src="{{ get_theme_file_uri('resources/images/model.jpg') }}" 
                   alt="Model draagt Eline handgemaakte sierraden met lab-grown diamanten - Ethische luxe sierraden" 
                   class="w-full h-[600px] object-cover"
                   itemprop="image"
                   loading="lazy"
                   width="600" height="600">
            </div>
          </div>
          
          {{-- Right: Content --}}
          <div class="space-y-8" data-aos="fade-left" data-aos-delay="400">
            <header>
              <h2 id="man-made-diamonds" 
                  class="text-4xl lg:text-5xl font-extralight text-slate-900 tracking-wide leading-tight heading-luxury" 
                  itemprop="name">
                man made diamonds
              </h2>
            </header>
            <div class="space-y-6 text-slate-600 text-lg leading-relaxed text-luxury" itemprop="description">
              <p>
                Onze lab-grown diamanten zijn identiek aan natuurlijke diamanten, maar dan ethisch geproduceerd. 
                Met dezelfde schittering, hardheid en schoonheid, maar zonder de milieu-impact. 
                Elk sieraad wordt met de hand gemaakt in ons atelier in Nederland.
              </p>
              <p>
                Tijdloos design ontmoet moderne technologie. Ontdek de perfecte combinatie van 
                ambachtelijke vakkunst en ethische verantwoordelijkheid.
              </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
              <button class="btn-primary-jewelry" 
                      aria-label="Ontdek meer over onze lab-grown diamanten collectie">
                BEKIJK DE COLLECTIE
              </button>
              <button class="btn-secondary-jewelry" 
                      aria-label="Meer informatie over ethische diamanten">
                OVER ELINE
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection