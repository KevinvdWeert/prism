<header class="bg-white border-b border-gray-100 sticky top-0 z-50">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between h-16">
      {{-- Logo --}}
      <a class="text-xl font-light text-gray-900 tracking-wide" href="{{ home_url('/') }}">
        eline
      </a>

      {{-- Desktop Navigation --}}
      <nav class="hidden md:flex space-x-8">
        <a href="{{ home_url('/') }}" class="text-gray-600 hover:text-gray-900 text-sm uppercase tracking-wide transition duration-300">collectie</a>
        <a href="/about" class="text-gray-600 hover:text-gray-900 text-sm uppercase tracking-wide transition duration-300">over</a>
        <a href="/services" class="text-gray-600 hover:text-gray-900 text-sm uppercase tracking-wide transition duration-300">service</a>
        <a href="/contact" class="text-gray-600 hover:text-gray-900 text-sm uppercase tracking-wide transition duration-300">contact</a>
      </nav>

      {{-- Right side icons --}}
      <div class="flex items-center space-x-4">
        {{-- Search --}}
        <button class="text-gray-600 hover:text-gray-900 transition duration-300">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </button>
        
        {{-- User Account --}}
        <button class="text-gray-600 hover:text-gray-900 transition duration-300">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
        </button>
        
        {{-- Shopping Cart --}}
        <button class="text-gray-600 hover:text-gray-900 transition duration-300">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0v6a2 2 0 002 2h2a2 2 0 002-2v-6"></path>
          </svg>
        </button>

        {{-- Mobile Menu Button --}}
        <button class="md:hidden text-gray-600 hover:text-gray-900" onclick="toggleMobileMenu()">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>

    {{-- Mobile Navigation --}}
    <nav id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-100">
      <div class="py-4 space-y-2">
        <a href="{{ home_url('/') }}" class="block px-4 py-2 text-gray-600 hover:text-gray-900 text-sm uppercase tracking-wide">collectie</a>
        <a href="/about" class="block px-4 py-2 text-gray-600 hover:text-gray-900 text-sm uppercase tracking-wide">over</a>
        <a href="/services" class="block px-4 py-2 text-gray-600 hover:text-gray-900 text-sm uppercase tracking-wide">service</a>
        <a href="/contact" class="block px-4 py-2 text-gray-600 hover:text-gray-900 text-sm uppercase tracking-wide">contact</a>
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