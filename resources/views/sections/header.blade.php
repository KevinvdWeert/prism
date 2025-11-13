<header class="bg-white/95 backdrop-blur-md border-b border-gray-100/50 sticky top-0 z-50 shadow-sm">
  <div class="container mx-auto px-6">
    <div class="flex items-center justify-between h-20">
      {{-- Logo --}}
      <a class="text-2xl font-extralight text-gray-900 tracking-widest" href="{{ home_url('/') }}">
        eline
      </a>

      {{-- Desktop Navigation --}}
      <nav class="hidden md:flex items-center space-x-12">
        <a href="{{ home_url('/') }}" class="text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300">collectie</a>
        <a href="/over" class="text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300">over</a>
        <a href="/ring" class="text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300">ring</a>
        <a href="/collectie" class="text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300">collectie</a>
      </nav>

      {{-- Right side icons --}}
      <div class="flex items-center space-x-6">
        {{-- Search --}}
        <button class="text-gray-500 hover:text-black transition duration-300 p-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>
        </button>
        
        {{-- User Account --}}
        <button class="text-gray-500 hover:text-black transition duration-300 p-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
          </svg>
        </button>
        
        {{-- Shopping Cart --}}
        <button class="text-gray-500 hover:text-black transition duration-300 p-2">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
          </svg>
        </button>

        {{-- Mobile Menu Button --}}
        <button class="md:hidden text-gray-500 hover:text-black p-2" onclick="toggleMobileMenu()">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
    </div>

    {{-- Mobile Navigation --}}
    <nav id="mobile-menu" class="md:hidden hidden bg-white/95 backdrop-blur-md border-t border-gray-100/50">
      <div class="py-6 space-y-4">
        <a href="{{ home_url('/') }}" class="block px-6 py-3 text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300">collectie</a>
        <a href="/over" class="block px-6 py-3 text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300">over</a>
        <a href="/ring" class="block px-6 py-3 text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300">ring</a>
        <a href="/collectie" class="block px-6 py-3 text-gray-600 hover:text-black text-sm font-light uppercase tracking-widest transition duration-300">collectie</a>
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