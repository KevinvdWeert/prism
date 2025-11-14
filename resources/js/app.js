import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

// Eline Jewelry Website Interactions

// Smooth scroll behavior for anchor links
document.addEventListener('DOMContentLoaded', function() {
  // Add smooth scroll to all anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // Intersection Observer for fade-in animations
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

  // Observe all sections for animation
  document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
  });

  // Product card hover effects
  document.querySelectorAll('.group').forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.classList.add('animate-float');
    });
    
    card.addEventListener('mouseleave', function() {
      this.classList.remove('animate-float');
    });
  });

  // Enhanced mobile menu with slide animation
  window.toggleMobileMenu = function() {
    const menu = document.getElementById('mobile-menu');
    const isHidden = menu.classList.contains('hidden');
    
    if (isHidden) {
      menu.classList.remove('hidden');
      menu.style.maxHeight = '0';
      menu.style.opacity = '0';
      
      // Force reflow
      menu.offsetHeight;
      
      menu.style.transition = 'max-height 0.3s ease-out, opacity 0.3s ease-out';
      menu.style.maxHeight = menu.scrollHeight + 'px';
      menu.style.opacity = '1';
    } else {
      menu.style.transition = 'max-height 0.3s ease-out, opacity 0.3s ease-out';
      menu.style.maxHeight = '0';
      menu.style.opacity = '0';
      
      setTimeout(() => {
        menu.classList.add('hidden');
      }, 300);
    }
  };

  // Loading animation for images
  document.querySelectorAll('img').forEach(img => {
    img.classList.add('loading');
    img.addEventListener('load', function() {
      this.classList.add('loaded');
      this.classList.remove('loading');
    });
    
    // If image is already loaded (cached)
    if (img.complete) {
      img.classList.add('loaded');
      img.classList.remove('loading');
    }
  });

  // Parallax effect for hero section
  const hero = document.querySelector('section');
  if (hero) {
    let ticking = false;
    
    function updateParallax() {
      const scrolled = window.pageYOffset;
      const parallaxElement = hero.querySelector('.relative');
      
      if (parallaxElement) {
        const speed = scrolled * 0.5;
        parallaxElement.style.transform = `translateY(${speed}px)`;
      }
      
      ticking = false;
    }
    
    function requestTick() {
      if (!ticking) {
        requestAnimationFrame(updateParallax);
        ticking = true;
      }
    }
    
    window.addEventListener('scroll', requestTick);
  }

  // Parallax effect for hero ring images
  const parallaxElements = document.querySelectorAll('.parallax-element');
  
  if (parallaxElements.length > 0) {
    let ticking = false;
    
    function updateParallax() {
      const scrolled = window.pageYOffset;
      
      parallaxElements.forEach(element => {
        const speed = parseFloat(element.dataset.speed) || 0.5;
        const yPos = -(scrolled * speed);
        element.style.transform = `translateY(${yPos}px) ${element.classList.contains('rotate-3') ? 'rotate(3deg)' : 'rotate(-3deg)'}`;
      });
      
      ticking = false;
    }
    
    function requestTick() {
      if (!ticking) {
        requestAnimationFrame(updateParallax);
        ticking = true;
      }
    }
    
    window.addEventListener('scroll', requestTick);
    
    // Reset transform on hover
    parallaxElements.forEach(element => {
      element.addEventListener('mouseenter', function() {
        this.style.transform = `translateY(0px) rotate(0deg)`;
      });
      
      element.addEventListener('mouseleave', function() {
        const scrolled = window.pageYOffset;
        const speed = parseFloat(this.dataset.speed) || 0.5;
        const yPos = -(scrolled * speed);
        this.style.transform = `translateY(${yPos}px) ${this.classList.contains('rotate-3') ? 'rotate(3deg)' : 'rotate(-3deg)'}`;
      });
    });
  }

  // Header background on scroll
  const header = document.querySelector('header');
  if (header) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 100) {
        header.classList.add('shadow-lg');
        header.classList.add('bg-white');
        header.classList.remove('bg-white/95');
      } else {
        header.classList.remove('shadow-lg');
        header.classList.remove('bg-white');
        header.classList.add('bg-white/95');
      }
    });
  }

  // Button click animations
  document.querySelectorAll('button').forEach(button => {
    button.addEventListener('click', function(e) {
      // Create ripple effect
      const ripple = document.createElement('span');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.height, rect.width);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;
      
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = x + 'px';
      ripple.style.top = y + 'px';
      ripple.classList.add('ripple');
      
      this.appendChild(ripple);
      
      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
  });
});

// CSS for ripple effect
const style = document.createElement('style');
style.textContent = `
  .ripple {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.6);
    transform: scale(0);
    animation: ripple-animation 0.6s linear;
    pointer-events: none;
  }
  
  @keyframes ripple-animation {
    to {
      transform: scale(4);
      opacity: 0;
    }
  }
`;
document.head.appendChild(style);
