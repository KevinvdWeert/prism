@extends('layouts.app')

@section('title', 'Over Ons')

@section('content')
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
      {{-- Hero sectie --}}
      <section class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Over Ons</h1>
        <p class="text-xl text-gray-600 leading-relaxed">
          Welkom op onze over ons pagina. Hier vertellen we graag meer over wie we zijn en wat we doen.
        </p>
      </section>

      {{-- Content sectie --}}
      <section class="grid md:grid-cols-2 gap-8 mb-12">
        <div>
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">Onze Missie</h2>
          <p class="text-gray-700 leading-relaxed mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
            nostrud exercitation ullamco laboris.
          </p>
          <p class="text-gray-700 leading-relaxed">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
          </p>
        </div>
        
        <div>
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">Onze Visie</h2>
          <p class="text-gray-700 leading-relaxed mb-4">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
            veritatis et quasi architecto beatae vitae dicta sunt.
          </p>
          <p class="text-gray-700 leading-relaxed">
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
            praesentium voluptatum deleniti atque corrupti quos dolores.
          </p>
        </div>
      </section>

      {{-- Features sectie --}}
      <section class="bg-gray-50 rounded-lg p-8">
        <h2 class="text-3xl font-semibold text-gray-900 text-center mb-8">Wat We Bieden</h2>
        
        <div class="grid md:grid-cols-3 gap-6">
          <div class="text-center">
            <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Snelheid</h3>
            <p class="text-gray-600">Razendsnel en efficiënt in alles wat we doen.</p>
          </div>
          
          <div class="text-center">
            <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Kwaliteit</h3>
            <p class="text-gray-600">Hoogste kwaliteitsstandaarden in elk project.</p>
          </div>
          
          <div class="text-center">
            <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Teamwork</h3>
            <p class="text-gray-600">Samenwerking staat centraal in onze aanpak.</p>
          </div>
        </div>
      </section>

      {{-- Contact call-to-action --}}
      <section class="text-center mt-12">
        <h2 class="text-2xl font-semibold text-gray-900 mb-4">Klaar om samen te werken?</h2>
        <p class="text-gray-600 mb-6">Neem contact met ons op voor een vrijblijvend gesprek.</p>
        <a href="/contact" 
           class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition duration-300">
          Contact Opnemen
        </a>
      </section>
    </div>
  </div>
@endsection