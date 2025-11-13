@extends('layouts.app')

@section('content')
  {{-- Hero Section --}}
  <section class="relative min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('{{ get_theme_file_uri('resources/images/hero-background.png') }}')">
    {{-- Overlay for better text readability --}}
    <div class="absolute inset-0 bg-white/80"></div>
    
    <div class="relative z-10 py-16 md:py-24">
      <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center min-h-screen">
          {{-- Left: Text Content --}}
          <div class="space-y-6">
            <h1 class="text-4xl md:text-5xl font-light text-gray-900 leading-tight">
              tijdloze sierraden,<br>
              handgemaakt voor jou
            </h1>
            <p class="text-gray-600 text-lg leading-relaxed max-w-md">
              Ontdek onze collectie van unieke sierraden, elk stuk met zorg vervaardigd 
              voor de perfecte uitdrukking van jouw persoonlijke stijl.
            </p>
            <div class="flex gap-4">
              <button class="bg-black text-white px-8 py-3 text-sm uppercase tracking-wide hover:bg-gray-800 transition duration-300">
                SHOP COLLECTIE
              </button>
              <button class="border border-gray-300 text-gray-700 px-8 py-3 text-sm uppercase tracking-wide hover:bg-gray-50 transition duration-300">
                MEER INFO
              </button>
            </div>
          </div>
          
          {{-- Right: Hero Image --}}
          <div class="relative">
            <img src="{{ get_theme_file_uri('resources/images/stones.jpg') }}" 
                 alt="Diamond rings" 
                 class="w-full h-auto object-cover">
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Popular Products Section --}}
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-light text-center text-gray-900 mb-12">populaire produkten</h2>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        {{-- Product 1 --}}
        <div class="text-center group">
          <div class="bg-gray-50 rounded-lg p-6 mb-4 group-hover:bg-gray-100 transition duration-300">
            <img src="{{ get_theme_file_uri('resources/images/stones.jpg') }}" 
                 alt="Solitair ring" 
                 class="w-full h-32 object-cover mx-auto">
          </div>
          <h3 class="font-medium text-gray-900 mb-2">solitair - ring</h3>
          <button class="text-sm text-gray-600 border border-gray-300 px-4 py-1 hover:bg-gray-50 transition duration-300">
            bekijk meer
          </button>
        </div>

        {{-- Product 2 --}}
        <div class="text-center group">
          <div class="bg-gray-50 rounded-lg p-6 mb-4 group-hover:bg-gray-100 transition duration-300">
            <img src="{{ get_theme_file_uri('resources/images/model.jpg') }}" 
                 alt="Princess hanger" 
                 class="w-full h-32 object-cover mx-auto">
          </div>
          <h3 class="font-medium text-gray-900 mb-2">princess - hanger</h3>
          <button class="text-sm text-gray-600 border border-gray-300 px-4 py-1 hover:bg-gray-50 transition duration-300">
            bekijk meer
          </button>
        </div>

        {{-- Product 3 --}}
        <div class="text-center group">
          <div class="bg-gray-50 rounded-lg p-6 mb-4 group-hover:bg-gray-100 transition duration-300">
            <img src="{{ get_theme_file_uri('resources/images/stones.jpg') }}" 
                 alt="Emerald oorbell" 
                 class="w-full h-32 object-cover mx-auto">
          </div>
          <h3 class="font-medium text-gray-900 mb-2">emerald - oorbell</h3>
          <button class="text-sm text-gray-600 border border-gray-300 px-4 py-1 hover:bg-gray-50 transition duration-300">
            bekijk meer
          </button>
        </div>

        {{-- Product 4 --}}
        <div class="text-center group">
          <div class="bg-gray-50 rounded-lg p-6 mb-4 group-hover:bg-gray-100 transition duration-300">
            <img src="{{ get_theme_file_uri('resources/images/hero-background.png') }}" 
                 alt="Classics ring" 
                 class="w-full h-32 object-cover mx-auto">
          </div>
          <h3 class="font-medium text-gray-900 mb-2">classics - ring</h3>
          <button class="text-sm text-gray-600 border border-gray-300 px-4 py-1 hover:bg-gray-50 transition duration-300">
            bekijk meer
          </button>
        </div>
      </div>
    </div>
  </section>

  {{-- Man Made Diamonds Section --}}
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        {{-- Left: Model Image --}}
        <div>
          <img src="{{ get_theme_file_uri('resources/images/model.jpg') }}" 
               alt="Model wearing jewelry" 
               class="w-full h-96 object-cover rounded-lg">
        </div>
        
        {{-- Right: Content --}}
        <div class="space-y-6">
          <h2 class="text-3xl font-light text-gray-900">man made diamonds</h2>
          <div class="space-y-4 text-gray-600 leading-relaxed">
            <p>
              Onze lab-grown diamanten zijn identiek aan natuurlijke diamanten, 
              maar worden ethisch geproduceerd in een gecontroleerde omgeving.
            </p>
            <p>
              Ze hebben dezelfde chemische, fysieke en optische eigenschappen 
              als natuurlijke diamanten, maar zijn milieuvriendelijker en 
              betaalbaarder.
            </p>
          </div>
          <div class="flex gap-4">
            <button class="bg-black text-white px-8 py-3 text-sm uppercase tracking-wide hover:bg-gray-800 transition duration-300">
              ONTDEK MEER
            </button>
            <button class="border border-gray-300 text-gray-700 px-8 py-3 text-sm uppercase tracking-wide hover:bg-gray-50 transition duration-300">
              MEER INFO
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection