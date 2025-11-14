/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './app/**/*.php',
    './resources/**/*.html',
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Inter', 'system-ui', 'sans-serif'],
        'serif': ['Playfair Display', 'Georgia', 'serif'],
        'mono': ['JetBrains Mono', 'monospace'],
      },
      colors: {
        'jewelry': {
          50: '#f8fafc',
          100: '#f1f5f9',
          200: '#e2e8f0',
          300: '#cbd5e1',
          400: '#94a3b8',
          500: '#64748b',
          600: '#475569',
          700: '#334155',
          800: '#1e293b',
          900: '#0f172a',
          950: '#020617',
        },
        'rose-gold': {
          50: '#fdf7f0',
          100: '#fbeee1',
          200: '#f5dac3',
          300: '#edc19f',
          400: '#e3a179',
          500: '#da8559',
          600: '#cc6d47',
          700: '#aa563c',
          800: '#884538',
          900: '#6f3a30',
          950: '#3c1c17',
        },
      },
      spacing: {
        '18': '4.5rem',
        '88': '22rem',
        '112': '28rem',
        '128': '32rem',
      },
      screens: {
        '3xl': '1600px',
      },
      animation: {
        'fade-in-up': 'fadeInUp 0.8s ease-out',
        'float': 'float 6s ease-in-out infinite',
        'float-slow': 'float-slow 8s ease-in-out infinite',
        'float-reverse': 'float-reverse 7s ease-in-out infinite',
        'subtle-pulse': 'subtle-pulse 4s ease-in-out infinite',
        'sparkle': 'sparkle 3s ease-in-out infinite',
      },
      keyframes: {
        fadeInUp: {
          '0%': {
            opacity: '0',
            transform: 'translateY(30px)',
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0)',
          },
        },
        float: {
          '0%, 100%': {
            transform: 'translateY(0px) rotate(3deg)',
          },
          '50%': {
            transform: 'translateY(-10px) rotate(3deg)',
          },
        },
        'float-slow': {
          '0%, 100%': {
            transform: 'translateY(0px) rotate(3deg) scale(1)',
          },
          '50%': {
            transform: 'translateY(-15px) rotate(3deg) scale(1.02)',
          },
        },
        'float-reverse': {
          '0%, 100%': {
            transform: 'translateY(0px) rotate(-3deg) scale(1)',
          },
          '50%': {
            transform: 'translateY(-12px) rotate(-3deg) scale(1.02)',
          },
        },
        'subtle-pulse': {
          '0%, 100%': {
            boxShadow: '0 25px 50px -12px rgba(0, 0, 0, 0.15)',
          },
          '50%': {
            boxShadow: '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
          },
        },
        sparkle: {
          '0%, 100%': {
            opacity: '0.7',
            transform: 'scale(1) rotate(0deg)',
          },
          '50%': {
            opacity: '1',
            transform: 'scale(1.05) rotate(180deg)',
          },
        },
      },
      backdropBlur: {
        xs: '2px',
      },
      boxShadow: {
        'jewelry': '0 25px 50px -12px rgba(0, 0, 0, 0.08)',
        'jewelry-hover': '0 35px 60px -12px rgba(0, 0, 0, 0.15)',
        'inner-glow': 'inset 0 2px 4px 0 rgba(255, 255, 255, 0.1)',
      },
      borderRadius: {
        '4xl': '2rem',
        '5xl': '3rem',
      },
      typography: {
        'jewelry': {
          css: {
            '--tw-prose-body': 'rgb(71 85 105)',
            '--tw-prose-headings': 'rgb(15 23 42)',
            '--tw-prose-lead': 'rgb(100 116 139)',
            '--tw-prose-links': 'rgb(15 23 42)',
            '--tw-prose-bold': 'rgb(15 23 42)',
            '--tw-prose-counters': 'rgb(100 116 139)',
            '--tw-prose-bullets': 'rgb(203 213 225)',
            '--tw-prose-hr': 'rgb(226 232 240)',
            '--tw-prose-quotes': 'rgb(15 23 42)',
            '--tw-prose-quote-borders': 'rgb(226 232 240)',
            '--tw-prose-captions': 'rgb(100 116 139)',
            '--tw-prose-code': 'rgb(15 23 42)',
            '--tw-prose-pre-code': 'rgb(226 232 240)',
            '--tw-prose-pre-bg': 'rgb(15 23 42)',
            '--tw-prose-th-borders': 'rgb(203 213 225)',
            '--tw-prose-td-borders': 'rgb(226 232 240)',
          },
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
  ],
}