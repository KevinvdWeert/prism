<footer class="bg-white border-t border-gray-100/50" role="contentinfo" itemscope itemtype="https://schema.org/Organization">
  <div class="container mx-auto px-6">
    {{-- Main footer content --}}
    <div class="py-16">
      <div class="grid md:grid-cols-5 gap-12">
        {{-- Brand section --}}
        <div class="md:col-span-2">
          <h3 class="text-2xl font-extralight text-gray-900 tracking-widest mb-6" itemprop="name">eline</h3>
          <p class="text-gray-600 text-sm leading-relaxed mb-6 max-w-md" itemprop="description">
            Ontdek onze collectie van unieke sierraden, elk stuk met zorg vervaardigd 
            voor de perfecte uitdrukking van jouw persoonlijke stijl. <strong>Lab-grown diamanten</strong> 
            voor een ethische en duurzame keuze.
          </p>
          {{-- Social media icons --}}
          <div class="flex space-x-4" role="list" aria-label="Volg ons op sociale media">
            <a href="https://twitter.com/elinesieraden" class="text-gray-400 hover:text-gray-600 transition duration-300" aria-label="Volg ons op Twitter" title="Eline op Twitter" itemprop="sameAs">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
            <a href="https://instagram.com/elinesieraden" class="text-gray-400 hover:text-gray-600 transition duration-300" aria-label="Volg ons op Instagram" title="Eline op Instagram" itemprop="sameAs">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
              </svg>
            </a>
            <a href="https://pinterest.com/elinesieraden" class="text-gray-400 hover:text-gray-600 transition duration-300" aria-label="Volg ons op Pinterest" title="Eline op Pinterest" itemprop="sameAs">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.747 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001 12.017.001z"/>
              </svg>
            </a>
          </div>
        </div>

        {{-- Links columns --}}
        <div>
          <h4 class="text-sm font-medium text-gray-900 uppercase tracking-widest mb-6">winkel</h4>
          <nav role="navigation" aria-label="Productcategorieën">
            <ul class="space-y-3 text-sm text-gray-600">
              <li><a href="{{ home_url('/ringen') }}" class="hover:text-gray-900 transition duration-300" title="Handgemaakte diamanten ringen">ringen</a></li>
              <li><a href="{{ home_url('/kettingen') }}" class="hover:text-gray-900 transition duration-300" title="Luxe kettingen en halskettingen">kettingen</a></li>
              <li><a href="{{ home_url('/oorbellen') }}" class="hover:text-gray-900 transition duration-300" title="Elegante oorbellen collectie">oorbellen</a></li>
              <li><a href="{{ home_url('/armbanden') }}" class="hover:text-gray-900 transition duration-300" title="Handgemaakte armbanden">armbanden</a></li>
            </ul>
          </nav>
        </div>

        <div>
          <h4 class="text-sm font-medium text-gray-900 uppercase tracking-widest mb-6">service</h4>
          <nav role="navigation" aria-label="Services">
            <ul class="space-y-3 text-sm text-gray-600">
              <li><a href="{{ home_url('/maatwerk') }}" class="hover:text-gray-900 transition duration-300" title="Op maat gemaakte sierraden">maatwerk</a></li>
              <li><a href="{{ home_url('/reparatie') }}" class="hover:text-gray-900 transition duration-300" title="Professionele sieraden reparatie">reparatie</a></li>
              <li><a href="{{ home_url('/verzekering') }}" class="hover:text-gray-900 transition duration-300" title="Sieraden verzekering informatie">verzekering</a></li>
              <li><a href="{{ home_url('/waardering') }}" class="hover:text-gray-900 transition duration-300" title="Sieraden taxatie en waardering">waardering</a></li>
            </ul>
          </nav>
        </div>

        <div>
          <h4 class="text-sm font-medium text-gray-900 uppercase tracking-widest mb-6">info</h4>
          <nav role="navigation" aria-label="Bedrijfsinformatie">
            <ul class="space-y-3 text-sm text-gray-600">
              <li><a href="{{ home_url('/over') }}" class="hover:text-gray-900 transition duration-300" title="Over Eline en ons verhaal">over ons</a></li>
              <li><a href="{{ home_url('/contact') }}" class="hover:text-gray-900 transition duration-300" title="Neem contact met ons op">contact</a></li>
              <li><a href="{{ home_url('/verzending') }}" class="hover:text-gray-900 transition duration-300" title="Verzending en levering informatie">verzending</a></li>
              <li><a href="{{ home_url('/retour') }}" class="hover:text-gray-900 transition duration-300" title="Retourbeleid en voorwaarden">retour</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    {{-- Bottom footer --}}
    <div class="py-6 border-t border-gray-100/50">
      <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        <p class="text-sm text-gray-500">
          © 2024 <span itemprop="name">Eline Sieraden</span>. Alle rechten voorbehouden.
        </p>
        <nav role="navigation" aria-label="Juridische links">
          <div class="flex space-x-6 text-sm text-gray-500">
            <a href="{{ home_url('/privacybeleid') }}" class="hover:text-gray-700 transition duration-300" title="Lees ons privacybeleid">Privacybeleid</a>
            <a href="{{ home_url('/algemene-voorwaarden') }}" class="hover:text-gray-700 transition duration-300" title="Algemene voorwaarden">Algemene voorwaarden</a>
            <a href="{{ home_url('/cookies') }}" class="hover:text-gray-700 transition duration-300" title="Cookie beleid">Cookies</a>
          </div>
        </nav>
      </div>
    </div>
  </div>
</footer>
