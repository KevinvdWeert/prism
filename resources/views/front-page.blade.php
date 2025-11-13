@extends('layouts.app')

@section('content')
  {{-- Hero Section --}}
  <section class="relative bg-gradient-to-br from-gray-50 to-white min-h-screen">
    <div class="container mx-auto px-6 py-20">
      <div class="grid md:grid-cols-2 gap-16 items-center min-h-[80vh]">
        {{-- Left: Text Content --}}
        <div class="space-y-8">
          <h1 class="text-5xl md:text-6xl font-extralight text-gray-900 leading-tight tracking-wide">
            tijdloze sierraden,<br>
            <span class="text-gray-600">handgemaakt voor jou</span>
          </h1>
          <div class="flex flex-col sm:flex-row gap-4">
            <button class="bg-black text-white px-8 py-4 text-sm font-medium uppercase tracking-widest hover:bg-gray-800 transition duration-500 transform hover:scale-105">
              SHOP COLLECTIE
            </button>
            <button class="text-gray-600 text-sm font-medium uppercase tracking-widest underline hover:text-black transition duration-300">
              MEER INFO
            </button>
          </div>
        </div>
        
        {{-- Right: Hero Images --}}
        <div class="relative">
          <div class="grid grid-cols-2 gap-4">
            <div class="space-y-4">
              <div class="bg-white p-8 rounded-2xl shadow-lg transform rotate-3 hover:rotate-0 transition duration-500">
                <img src="{{ get_theme_file_uri('resources/images/ring-1.jpg') }}" 
                     alt="Diamond ring" 
                     class="w-full h-48 object-cover rounded-lg">
              </div>
            </div>
            <div class="space-y-4 mt-8">
              <div class="bg-white p-8 rounded-2xl shadow-lg transform -rotate-3 hover:rotate-0 transition duration-500">
                <img src="{{ get_theme_file_uri('resources/images/ring-2.jpg') }}" 
                     alt="Diamond ring" 
                     class="w-full h-48 object-cover rounded-lg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Popular Products Section --}}
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-extralight text-center text-gray-900 mb-16 tracking-wide">populaire produkten</h2>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-6xl mx-auto">
        {{-- Product 1: Solitair Ring --}}
        <div class="text-center group cursor-pointer">
          <div class="bg-gray-50 rounded-3xl p-8 mb-6 group-hover:bg-gray-100 transition duration-500 transform group-hover:scale-105">
            <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center shadow-lg">
              <svg class="w-10 h-10 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z"/>
              </svg>
            </div>
          </div>
          <h3 class="font-light text-gray-900 mb-3 tracking-wide">solitair - ring</h3>
          <button class="text-sm text-gray-600 border border-gray-300 px-6 py-2 rounded-full hover:bg-gray-50 transition duration-300 tracking-wide">
            bekijk meer
          </button>
        </div>

        {{-- Product 2: Princess Hanger --}}
        <div class="text-center group cursor-pointer">
          <div class="bg-gray-50 rounded-3xl p-8 mb-6 group-hover:bg-gray-100 transition duration-500 transform group-hover:scale-105">
            <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center shadow-lg">
              <svg class="w-10 h-10 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                <path d="M7 3V6H3V8H7V11L9 9L7 7H21V5H7V3Z"/>
              </svg>
            </div>
          </div>
          <h3 class="font-light text-gray-900 mb-3 tracking-wide">princess - hanger</h3>
          <button class="text-sm text-gray-600 border border-gray-300 px-6 py-2 rounded-full hover:bg-gray-50 transition duration-300 tracking-wide">
            bekijk meer
          </button>
        </div>

        {{-- Product 3: Emerald Oorbell --}}
        <div class="text-center group cursor-pointer">
          <div class="bg-gray-50 rounded-3xl p-8 mb-6 group-hover:bg-gray-100 transition duration-500 transform group-hover:scale-105">
            <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center shadow-lg">
              <svg class="w-10 h-10 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="3"/>
                <circle cx="12" cy="6" r="1"/>
                <circle cx="12" cy="18" r="1"/>
              </svg>
            </div>
          </div>
          <h3 class="font-light text-gray-900 mb-3 tracking-wide">emerald - oorbell</h3>
          <button class="text-sm text-gray-600 border border-gray-300 px-6 py-2 rounded-full hover:bg-gray-50 transition duration-300 tracking-wide">
            bekijk meer
          </button>
        </div>

        {{-- Product 4: Classics Ring --}}
        <div class="text-center group cursor-pointer">
          <div class="bg-gray-50 rounded-3xl p-8 mb-6 group-hover:bg-gray-100 transition duration-500 transform group-hover:scale-105">
            <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center shadow-lg">
              <svg class="w-10 h-10 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"/>
                <circle cx="12" cy="12" r="6"/>
                <circle cx="12" cy="12" r="2"/>
              </svg>
            </div>
          </div>
          <h3 class="font-light text-gray-900 mb-3 tracking-wide">classics - ring</h3>
          <button class="text-sm text-gray-600 border border-gray-300 px-6 py-2 rounded-full hover:bg-gray-50 transition duration-300 tracking-wide">
            bekijk meer
          </button>
        </div>
      </div>
    </div>
  </section>

  {{-- Man Made Diamonds Section --}}
  <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-6">
      <div class="grid md:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
        {{-- Left: Model Image --}}
        <div class="relative">
          <div class="rounded-3xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-700">
            <img src="{{ get_theme_file_uri('resources/images/model.jpg') }}" 
                 alt="Model wearing jewelry" 
                 class="w-full h-[600px] object-cover">
          </div>
          <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-white rounded-full shadow-xl flex items-center justify-center">
            <svg class="w-16 h-16 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z"/>
            </svg>
          </div>
        </div>
        
        {{-- Right: Content --}}
        <div class="space-y-8">
          <h2 class="text-4xl font-extralight text-gray-900 tracking-wide leading-tight">man made diamonds</h2>
          <div class="space-y-6 text-gray-600 text-lg leading-relaxed">
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
          <div class="flex flex-col sm:flex-row gap-4">
            <button class="bg-black text-white px-8 py-4 text-sm font-medium uppercase tracking-widest hover:bg-gray-800 transition duration-500 transform hover:scale-105">
              ONTDEK MEER
            </button>
            <button class="text-gray-600 text-sm font-medium uppercase tracking-widest underline hover:text-black transition duration-300">
              MEER INFO
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection