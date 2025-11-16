<header class="bg-white/95 backdrop-blur-md border-b border-gray-100/50 sticky top-0 z-50 shadow-sm" role="banner">
  <div class="container mx-auto px-6">
    <div class="flex items-center justify-between h-20">
      {{-- Logo --}}
      <div itemscope itemtype="https://schema.org/Organization">
        <a href="{{ home_url('/') }}" itemprop="url" aria-label="Eline Sieraden - Ga naar homepagina" class="block">
          <img src="{{ get_theme_file_uri('resources/images/logo.png') }}" 
               alt="Eline Sieraden Logo" 
               class="h-8 w-auto"
               itemprop="logo"
               width="120" 
               height="32">
        </a>
        <meta itemprop="name" content="Eline Sieraden">
        <meta itemprop="description" content="Luxe handgemaakte sierraden met lab-grown diamanten">
      </div>

      {{-- Desktop Navigation --}}
      <nav class="hidden md:flex items-center space-x-12" role="navigation" aria-label="Hoofdnavigatie">
        <a href="{{ home_url('/collectie') }}" class="text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300" title="Bekijk onze complete sierraden collectie">collectie</a>
        <a href="{{ home_url('/over') }}" class="text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300" title="Over Eline en onze ambachtelijke sierraden">over</a>
        <a href="{{ home_url('/ringen') }}" class="text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300" title="Handgemaakte diamanten ringen">ring</a>
        <a href="{{ home_url('/collectie') }}" class="text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300" title="Volledige sieraden collectie">collectie</a>
      </nav>

      {{-- Right side icons --}}
      <div class="flex items-center space-x-6" role="group" aria-label="Account en winkel functies">
        {{-- Search --}}
        <button class="text-gray-500 hover:text-black transition duration-300 p-2" aria-label="Zoeken in sierraden collectie" title="Zoek naar sierraden">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>
        </button>
        
        {{-- User Account --}}
        <button class="text-gray-500 hover:text-black transition duration-300 p-2" aria-label="Mijn account" title="Login of registreer">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
          </svg>
        </button>
        
        {{-- Shopping Cart --}}
        <button class="text-gray-500 hover:text-black transition duration-300 p-2" aria-label="Winkelwagen (0 items)" title="Bekijk winkelwagen">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
          </svg>
        </button>

        {{-- Mobile Menu Button --}}
        <button class="md:hidden text-gray-500 hover:text-black p-2" onclick="toggleMobileMenu()" aria-label="Open mobiele navigatie" title="Menu">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
    </div>

    {{-- Mobile Navigation --}}
    <nav id="mobile-menu" class="md:hidden hidden bg-white/95 backdrop-blur-md border-t border-gray-100/50" role="navigation" aria-label="Mobiele navigatie">
      <div class="py-6 space-y-4">
        <a href="{{ home_url('/collectie') }}" class="block px-6 py-3 text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300" title="Bekijk onze complete sierraden collectie">collectie</a>
        <a href="{{ home_url('/over') }}" class="block px-6 py-3 text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300" title="Over Eline en onze ambachtelijke sierraden">over</a>
        <a href="{{ home_url('/ringen') }}" class="block px-6 py-3 text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300" title="Handgemaakte diamanten ringen">ring</a>
        <a href="{{ home_url('/collectie') }}" class="block px-6 py-3 text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300" title="Volledige sieraden collectie">collectie</a>
      </div>
    </nav>
  </div>
</header>

<script>
  function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  }
</script>