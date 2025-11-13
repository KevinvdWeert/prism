@extends('layouts.app')

@section('title', 'Basis Pagina')

@section('content')
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto">
      {{-- Page Header --}}
      <header class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">
          Pagina Titel
        </h1>
        <p class="text-lg text-gray-600">
          Een korte omschrijving van deze pagina komt hier te staan.
        </p>
      </header>

      {{-- Main Content --}}
      <main class="prose prose-lg max-w-none">
        <p>
          Dit is een basis pagina template voor je Sage WordPress thema. 
          Je kunt deze structuur gebruiken als startpunt voor nieuwe pagina's.
        </p>
        
        <h2>Subkop</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod 
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <h3>Kleinere kop</h3>
        <p>
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
          eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
          sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        {{-- Voorbeeld lijst --}}
        <ul>
          <li>Eerste punt</li>
          <li>Tweede punt</li>
          <li>Derde punt</li>
        </ul>
      </main>

      {{-- Optional sidebar content --}}
      @if(false) {{-- Zet op true als je een sidebar wilt --}}
        @section('sidebar')
          <div class="widget">
            <h3>Sidebar Widget</h3>
            <p>Dit is sidebar content.</p>
          </div>
        @endsection
      @endif

      {{-- Call to Action (optioneel) --}}
      <section class="bg-gray-100 rounded-lg p-6 mt-8 text-center">
        <h2 class="text-xl font-semibold mb-3">Interesse gewekt?</h2>
        <p class="text-gray-600 mb-4">
          Neem contact met ons op voor meer informatie.
        </p>
        <a href="/contact" 
           class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
          Contact
        </a>
      </section>
    </div>
  </div>
@endsection