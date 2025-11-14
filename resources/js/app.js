import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

// Eline Jewelry Website Enhanced Interactions
document.addEventListener('DOMContentLoaded', function() {
  
  // Initialize all functionality
  initSmoothScrolling();
  initProductCards();
  initMobileMenu();
  initIntersectionObserver();
  initAccessibility();
  initPerformanceOptimizations();

  // Smooth scroll behavior for anchor links
  function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          const headerHeight = document.querySelector('header')?.offsetHeight || 0;
          const targetPosition = target.offsetTop - headerHeight - 20;
          
          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  }

  // Enhanced product card interactions
  function initProductCards() {
    document.querySelectorAll('.product-card, .group').forEach(card => {
      // Mouse enter animation
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-8px) scale(1.02)';
        this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        
        // Animate product image
        const image = this.querySelector('img');
        if (image) {
          image.style.transform = 'scale(1.1)';
          image.style.transition = 'transform 0.5s ease-out';
        }
      });

      // Mouse leave animation
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
        
        const image = this.querySelector('img');
        if (image) {
          image.style.transform = 'scale(1)';
        }
      });

      // Add keyboard accessibility
      card.setAttribute('tabindex', '0');
      card.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          this.click();
        }
      });
    });
  }

  // Mobile menu functionality
  function initMobileMenu() {
    const mobileMenuButton = document.querySelector('.md\\:hidden button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
      mobileMenuButton.addEventListener('click', function() {
        toggleMobileMenu();
      });
    }

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
      if (mobileMenu && !mobileMenu.contains(e.target) && !mobileMenuButton?.contains(e.target)) {
        mobileMenu.classList.add('hidden');
      }
    });

    // Close mobile menu on escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && mobileMenu && !mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.add('hidden');
      }
    });
  }

  // Intersection Observer for animations
  function initIntersectionObserver() {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-fadeInUp');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Observe sections and important elements
    document.querySelectorAll('section, .product-grid, .hero-content').forEach(el => {
      observer.observe(el);
    });
  }

  // Accessibility improvements
  function initAccessibility() {
    // Add skip to content link
    const skipLink = document.createElement('a');
    skipLink.href = '#main-content';
    skipLink.textContent = 'Skip to main content';
    skipLink.className = 'sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 focus:z-50 focus:p-4 focus:bg-white focus:text-black focus:outline-none';
    document.body.insertBefore(skipLink, document.body.firstChild);
  }

  // Performance optimizations
  function initPerformanceOptimizations() {
    // Debounced scroll handler
    let isScrolling = false;
    
    window.addEventListener('scroll', function() {
      if (!isScrolling) {
        requestAnimationFrame(handleScroll);
        isScrolling = true;
      }
    });

    function handleScroll() {
      const scrolled = window.pageYOffset;
      const header = document.querySelector('header');
      
      if (header) {
        if (scrolled > 100) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      }
      
      isScrolling = false;
    }
  }

});

// Global functions for backward compatibility
window.toggleMobileMenu = function() {
  const menu = document.getElementById('mobile-menu');
  if (menu) {
    menu.classList.toggle('hidden');
  }
};