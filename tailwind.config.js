const colors = require('tailwindcss/colors')

module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './vendor/laravel/jetstream/**/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
    ],
    safelist: [
        'prose-sm',
        'prose-base',
        'prose-lg',
        'prose-xl',
        'prose-2xl',
    ],
  },

  darkMode: 'media',

  theme: {
    extend: {
      boxShadow: {
          'light': '0 1px 3px 0 rgba(255, 255, 255, 0.1), 0 1px 2px 0 rgba(255, 255, 255, 0.06)',
          'light-md': '0 4px 6px -1px rgba(255, 255, 255, 0.1), 0 2px 4px -1px rgba(255, 255, 255, 0.06)',
          'light-lg': '0 10px 15px -3px rgba(255, 255, 255, 0.1), 0 4px 6px -2px rgba(255, 255, 255, 0.05)',
          'light-xl': '0 20px 25px -5px rgba(255, 255, 255, 0.1), 0 10px 10px -5px rgba(255, 255, 255, 0.04)',
          'light-2xl': '0 25px 50px -12px rgba(255, 255, 255, 0.25)',
      },
      colors: {
        cyan: colors.cyan,
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            h2: {
              fontSize: '2em',
              color: theme('colors.cyan.700'),
              marginBottom: '.5em',
            },
            h3: {
              fontSize: '1.5em',
              color: theme('colors.cyan.700'),
            },
            h4: {
              color: theme('colors.cyan.700'),
            },
            'h2 strong': {
              color: theme('colors.cyan.700'),
            },
            'h3 strong': {
              color: theme('colors.cyan.700'),
            },
            'h4 strong': {
              color: theme('colors.cyan.700'),
            },
            'a strong': {
              color: theme('colors.cyan.600'),
            },
            li: {
              marginTop: 0,
              marginBottom: 0,
            },
            '> ul > li p': {
              marginTop: 0,
              marginBottom: 0,
            },
            '> ul > li > *:first-child': {
              marginTop: 0,
            },
            '> ul > li > *:last-child': {
              marginBottom: 0,
            },
            'ul > li::before': {
              backgroundColor: theme('colors.gray.700'),
            },
          },
        },
        light: {
          css: [
            {
              color: theme('colors.gray.200'),
              '[class~="lead"]': {
                color: theme('colors.gray.300'),
              },
              a: {
                color: theme('colors.white'),
              },
              strong: {
                color: theme('colors.white'),
              },
              'ol > li::before': {
                color: theme('colors.gray.400'),
              },
              'ul > li::before': {
                backgroundColor: theme('colors.gray.600'),
              },
              hr: {
                borderColor: theme('colors.gray.200'),
              },
              blockquote: {
                color: theme('colors.gray.200'),
                borderLeftColor: theme('colors.gray.600'),
              },
              p: {
                color: theme('colors.gray.400'),
              },
              'p strong': {
                color: theme('colors.gray.200'),
              },
              h1: {
                color: theme('colors.white'),
              },
              'h1 strong': {
                color: theme('colors.white'),
              },
              h2: {
                color: theme('colors.gray.200'),
              },
              'h2 strong': {
                color: theme('colors.gray.200'),
              },
              h3: {
                color: theme('colors.gray.200'),
              },
              'h3 strong': {
                color: theme('colors.gray.200'),
              },
              h4: {
                color: theme('colors.gray.200'),
              },
              'h4 strong': {
                color: theme('colors.gray.200'),
              },
              'figure figcaption': {
                color: theme('colors.gray.400'),
              },
              code: {
                color: theme('colors.white'),
              },
              'a code': {
                color: theme('colors.white'),
              },
              pre: {
                color: theme('colors.gray.200'),
                backgroundColor: theme('colors.gray.800'),
              },
              thead: {
                color: theme('colors.white'),
                borderBottomColor: theme('colors.gray.400'),
              },
              'tbody tr': {
                borderBottomColor: theme('colors.gray.600'),
              },
            },
          ],
        },
      }),
    },
  },

  variants: {
    extend: {
      boxShadow: ['dark'],
      display: ['dark'],
      typography: ['dark'],
    },
  },

  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
}
