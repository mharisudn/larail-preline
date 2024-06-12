import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const colors = require('tailwindcss/colors')
const svgToTinyDataUri = require('mini-svg-data-uri')
const { default: flatternColorPalette } = require('tailwindcss/lib/util/flattenColorPalette')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        'node_modules/preline/dist/*.js',
        './src/**/*.{html,js}',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            colors: {
                background: 'hsl(var(--color-background) / <alpha-value>)',
                foreground: 'hsl(var(--color-foreground) / <alpha-value>)',
                card: 'hsl(var(--color-card) / <alpha-value>)',
                'card-foreground': 'hsl(var(--color-card-foreground) / <alpha-value>)',
                popover: 'hsl(var(--color-popover) / <alpha-value>)',
                'popover-foreground': 'hsl(var(--color-popover-foreground) / <alpha-value>)',
                primary: 'hsl(var(--color-primary) / <alpha-value>)',
                'primary-foreground': 'hsl(var(--color-primary-foreground) / <alpha-value>)',
                secondary: 'hsl(var(--color-secondary) / <alpha-value>)',
                'secondary-foreground': 'hsl(var(--color-secondary-foreground) / <alpha-value>)',
                muted: 'hsl(var(--color-muted) / <alpha-value>)',
                'muted-foreground': 'hsl(var(--color-muted-foreground) / <alpha-value>)',
                accent: 'hsl(var(--color-accent) / <alpha-value>)',
                'accent-foreground': 'hsl(var(--color-accent-foreground) / <alpha-value>)',
                destructive: 'hsl(var(--color-destructive) / <alpha-value>)',
                'destructive-foreground': 'hsl(var(--color-destructive-foreground) / <alpha-value>)',
                border: 'hsl(var(--color-border) / <alpha-value>)',
                input: 'hsl(var(--color-input) / <alpha-value>)',
                ring: 'hsl(var(--color-ring) / <alpha-value>)',
            },
            borderRadius: {
                DEFAULT: 'var(--radius)',
            },
            fontFamily: {
                sans: [
                    'Inter var,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"',
                    // {
                    //     fontFeatureSettings: '"cv02","cv03","cv04","cv11"',
                    //     fontVariationSettings: '"opsz" 32'
                    // },
                ],
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['dark'],
            textColor: ['dark'],
            borderColor: ['dark'],
        },
    },

    plugins: [
        forms,
        require('preline/plugin'),
        function ({ addUtilities, matchUtilities, theme }) {
            addUtilities({
                '.underline': {
                    'text-decoration': 'underline',
                    'text-underline-offset': '3px',
                }
            }),
                matchUtilities(
                    {
                        'bg-brick-wall': value => ({
                            backgroundImage: `url("${svgToTinyDataUri(
                                `<svg width="42" height="44" viewBox="0 0 42 44" xmlns="http://www.w3.org/2000/svg"><g id="Page-1" fill="none" fill-rule="evenodd"><g id="brick-wall" fill="${value}"><path d="M0 0h42v44H0V0zm1 1h40v20H1V1zM0 23h20v20H0V23zm22 0h20v20H22V23z"/></g></g></svg>`
                            )
                            }")`
                        })
                    },
                    {
                        values: flatternColorPalette(theme('backgroundColor')),
                        type: 'color',
                    }
                )
        },
    ],
};
