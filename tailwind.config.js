import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },

            // Custom Colors menggunakan CSS Variables
            colors: {
                brand: {
                    25: "var(--color-brand-25)",
                    50: "var(--color-brand-50)",
                    100: "var(--color-brand-100)",
                    200: "var(--color-brand-200)",
                    300: "var(--color-brand-300)",
                    400: "var(--color-brand-400)",
                    500: "var(--color-brand-500)",
                    600: "var(--color-brand-600)",
                    700: "var(--color-brand-700)",
                    800: "var(--color-brand-800)",
                    900: "var(--color-brand-900)",
                    950: "var(--color-brand-950)",
                },
                gray: {
                    25: "var(--color-gray-25)",
                    50: "var(--color-gray-50)",
                    100: "var(--color-gray-100)",
                    200: "var(--color-gray-200)",
                    300: "var(--color-gray-300)",
                    400: "var(--color-gray-400)",
                    500: "var(--color-gray-500)",
                    600: "var(--color-gray-600)",
                    700: "var(--color-gray-700)",
                    800: "var(--color-gray-800)",
                    900: "var(--color-gray-900)",
                    950: "var(--color-gray-950)",
                    dark: "var(--color-gray-dark)",
                },
                success: {
                    25: "var(--color-success-25)",
                    50: "var(--color-success-50)",
                    100: "var(--color-success-100)",
                    200: "var(--color-success-200)",
                    300: "var(--color-success-300)",
                    400: "var(--color-success-400)",
                    500: "var(--color-success-500)",
                    600: "var(--color-success-600)",
                    700: "var(--color-success-700)",
                    800: "var(--color-success-800)",
                    900: "var(--color-success-900)",
                    950: "var(--color-success-950)",
                },
                error: {
                    25: "var(--color-error-25)",
                    50: "var(--color-error-50)",
                    100: "var(--color-error-100)",
                    200: "var(--color-error-200)",
                    300: "var(--color-error-300)",
                    400: "var(--color-error-400)",
                    500: "var(--color-error-500)",
                    600: "var(--color-error-600)",
                    700: "var(--color-error-700)",
                    800: "var(--color-error-800)",
                    900: "var(--color-error-900)",
                    950: "var(--color-error-950)",
                },
                warning: {
                    25: "var(--color-warning-25)",
                    50: "var(--color-warning-50)",
                    100: "var(--color-warning-100)",
                    200: "var(--color-warning-200)",
                    300: "var(--color-warning-300)",
                    400: "var(--color-warning-400)",
                    500: "var(--color-warning-500)",
                    600: "var(--color-warning-600)",
                    700: "var(--color-warning-700)",
                    800: "var(--color-warning-800)",
                    900: "var(--color-warning-900)",
                    950: "var(--color-warning-950)",
                },
            },

            // Custom Shadows
            boxShadow: {
                "theme-xs": "var(--shadow-theme-xs)",
                "theme-sm": "var(--shadow-theme-sm)",
                "theme-md": "var(--shadow-theme-md)",
                "theme-lg": "var(--shadow-theme-lg)",
                "theme-xl": "var(--shadow-theme-xl)",
            },

            // Custom Spacing (opsional)
            spacing: {
                18: "4.5rem",
                88: "22rem",
                128: "32rem",
            },

            // Custom Border Radius (opsional)
            borderRadius: {
                "4xl": "2rem",
                "5xl": "2.5rem",
            },

            // Custom Animation (opsional)
            animation: {
                "fade-in": "fadeIn 0.5s ease-in-out",
                "slide-up": "slideUp 0.3s ease-out",
            },

            // Custom Keyframes (opsional)
            keyframes: {
                fadeIn: {
                    "0%": { opacity: "0" },
                    "100%": { opacity: "1" },
                },
                slideUp: {
                    "0%": { transform: "translateY(10px)", opacity: "0" },
                    "100%": { transform: "translateY(0)", opacity: "1" },
                },
            },
        },
    },

    plugins: [forms],
};
