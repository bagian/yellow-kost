# Panduan Lengkap Custom Theme Tailwind CSS

## 🎨 Apa itu Custom Theme?

Custom theme di Tailwind CSS memungkinkan Anda untuk:

-   Menambahkan warna custom
-   Membuat shadow custom
-   Menambahkan spacing custom
-   Membuat border radius custom
-   Menambahkan animasi custom
-   Dan banyak lagi!

## 📁 Struktur File

### 1. `tailwind.config.js`

File konfigurasi utama yang mendefinisikan custom theme.

### 2. `resources/css/app.css`

File CSS yang berisi CSS variables (custom properties).

## 🚀 Cara Implementasi

### Langkah 1: Konfigurasi Tailwind

```javascript
// tailwind.config.js
export default {
    theme: {
        extend: {
            // Custom Colors
            colors: {
                brand: {
                    25: "var(--color-brand-25)",
                    50: "var(--color-brand-50)",
                    100: "var(--color-brand-100)",
                    // ... dan seterusnya
                },
                success: {
                    25: "var(--color-success-25)",
                    // ... dan seterusnya
                },
                error: {
                    25: "var(--color-error-25)",
                    // ... dan seterusnya
                },
                warning: {
                    25: "var(--color-warning-25)",
                    // ... dan seterusnya
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

            // Custom Spacing
            spacing: {
                18: "4.5rem",
                88: "22rem",
                128: "32rem",
            },

            // Custom Border Radius
            borderRadius: {
                "4xl": "2rem",
                "5xl": "2.5rem",
            },

            // Custom Animations
            animation: {
                "fade-in": "fadeIn 0.5s ease-in-out",
                "slide-up": "slideUp 0.3s ease-out",
            },

            // Custom Keyframes
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
};
```

### Langkah 2: CSS Variables

```css
/* resources/css/app.css */
@import "tailwindcss/preflight";
@import "tailwindcss/utilities";

:root {
    /* Brand Colors */
    --color-brand-25: #f2f7ff;
    --color-brand-50: #ecf3ff;
    --color-brand-100: #dde9ff;
    --color-brand-200: #c2d6ff;
    --color-brand-300: #9cb9ff;
    --color-brand-400: #7592ff;
    --color-brand-500: #465fff;
    --color-brand-600: #3641f5;
    --color-brand-700: #2a31d8;
    --color-brand-800: #252dae;
    --color-brand-900: #262e89;
    --color-brand-950: #161950;

    /* Success Colors */
    --color-success-25: #f6fef9;
    --color-success-50: #ecfdf3;
    --color-success-100: #d1fadf;
    --color-success-200: #a6f4c5;
    --color-success-300: #6ce9a6;
    --color-success-400: #32d583;
    --color-success-500: #12b76a;
    --color-success-600: #039855;
    --color-success-700: #027a48;
    --color-success-800: #05603a;
    --color-success-900: #054f31;
    --color-success-950: #053321;

    /* Error Colors */
    --color-error-25: #fffbfa;
    --color-error-50: #fef3f2;
    --color-error-100: #fee4e2;
    --color-error-200: #fecdca;
    --color-error-300: #fda29b;
    --color-error-400: #f97066;
    --color-error-500: #f04438;
    --color-error-600: #d92d20;
    --color-error-700: #b42318;
    --color-error-800: #912018;
    --color-error-900: #7a271a;
    --color-error-950: #55160c;

    /* Warning Colors */
    --color-warning-25: #fffcf5;
    --color-warning-50: #fffaeb;
    --color-warning-100: #fef0c7;
    --color-warning-200: #fedf89;
    --color-warning-300: #fec84b;
    --color-warning-400: #fdb022;
    --color-warning-500: #f79009;
    --color-warning-600: #dc6803;
    --color-warning-700: #b54708;
    --color-warning-800: #93370d;
    --color-warning-900: #7a2e0e;
    --color-warning-950: #4e1d09;

    /* Custom Shadows */
    --shadow-theme-xs: 0px 1px 2px 0px rgba(16, 24, 40, 0.05);
    --shadow-theme-sm: 0px 1px 3px 0px rgba(16, 24, 40, 0.1), 0px 1px 2px 0px
            rgba(16, 24, 40, 0.06);
    --shadow-theme-md: 0px 4px 8px -2px rgba(16, 24, 40, 0.1), 0px 2px 4px -2px
            rgba(16, 24, 40, 0.06);
    --shadow-theme-lg: 0px 12px 16px -4px rgba(16, 24, 40, 0.08), 0px 4px
            6px -2px rgba(16, 24, 40, 0.03);
    --shadow-theme-xl: 0px 20px 24px -4px rgba(16, 24, 40, 0.08), 0px 8px
            8px -4px rgba(16, 24, 40, 0.03);
}
```

## 🎯 Cara Penggunaan

### Custom Colors

```html
<!-- Background Colors -->
<div class="bg-brand-500">Brand Primary</div>
<div class="bg-success-500">Success</div>
<div class="bg-error-500">Error</div>
<div class="bg-warning-500">Warning</div>

<!-- Text Colors -->
<p class="text-brand-600">Brand Text</p>
<p class="text-success-600">Success Text</p>
<p class="text-error-600">Error Text</p>
<p class="text-warning-600">Warning Text</p>

<!-- Border Colors -->
<div class="border border-brand-200">Brand Border</div>
<div class="border border-success-200">Success Border</div>
```

### Custom Shadows

```html
<!-- Custom Shadow Classes -->
<div class="shadow-theme-xs">Extra Small Shadow</div>
<div class="shadow-theme-sm">Small Shadow</div>
<div class="shadow-theme-md">Medium Shadow</div>
<div class="shadow-theme-lg">Large Shadow</div>
<div class="shadow-theme-xl">Extra Large Shadow</div>
```

### Custom Spacing

```html
<!-- Custom Padding -->
<div class="p-18">Padding 4.5rem</div>
<div class="p-88">Padding 22rem</div>
<div class="p-128">Padding 32rem</div>

<!-- Custom Margin -->
<div class="m-18">Margin 4.5rem</div>
<div class="m-88">Margin 22rem</div>
<div class="m-128">Margin 32rem</div>
```

### Custom Border Radius

```html
<!-- Custom Border Radius -->
<div class="rounded-4xl">Border Radius 2rem</div>
<div class="rounded-5xl">Border Radius 2.5rem</div>
```

### Custom Animations

```html
<!-- Custom Animation Classes -->
<div class="animate-fade-in">Fade In Animation</div>
<div class="animate-slide-up">Slide Up Animation</div>
```

## 🔧 Metode Lain untuk Custom Theme

### 1. **Theme Override (Tanpa Extend)**

```javascript
theme: {
    colors: {
        // Ini akan mengganti SEMUA warna default
        primary: '#465fff',
        secondary: '#667085',
        // ... warna lainnya
    },
}
```

### 2. **CSS Variables Langsung**

```css
:root {
    --primary-color: #465fff;
    --secondary-color: #667085;
}
```

```html
<div class="bg-[var(--primary-color)]">Custom Color</div>
```

### 3. **Arbitrary Values**

```html
<!-- Menggunakan nilai arbitrary -->
<div class="bg-[#465fff]">Custom Color</div>
<div class="p-[4.5rem]">Custom Padding</div>
<div class="rounded-[2rem]">Custom Border Radius</div>
```

## 📱 Responsive Design

```html
<!-- Responsive dengan custom theme -->
<div class="bg-brand-100 md:bg-brand-200 lg:bg-brand-300">
    Responsive Brand Color
</div>

<div class="shadow-theme-sm md:shadow-theme-md lg:shadow-theme-lg">
    Responsive Shadow
</div>
```

## 🎨 Dark Mode Support

```css
/* resources/css/app.css */
:root {
    --color-brand-500: #465fff;
}

@media (prefers-color-scheme: dark) {
    :root {
        --color-brand-500: #9cb9ff;
    }
}
```

## 🚀 Best Practices

1. **Gunakan CSS Variables** untuk konsistensi dan kemudahan maintenance
2. **Gunakan Extend** untuk menambahkan tanpa mengganti default
3. **Buat Naming Convention** yang konsisten
4. **Dokumentasikan** semua custom values
5. **Test Responsive** pada berbagai ukuran layar
6. **Gunakan Semantic Names** (brand, success, error) bukan nama warna

## 📋 Contoh Lengkap

Lihat file `resources/views/examples/custom-theme.blade.php` untuk contoh lengkap penggunaan custom theme.

## 🔄 Rebuild CSS

Setelah mengubah konfigurasi, jalankan:

```bash
npm run dev
# atau
npm run build
```

## 🎯 Kesimpulan

Custom theme di Tailwind CSS memberikan fleksibilitas besar untuk:

-   Konsistensi design system
-   Kemudahan maintenance
-   Reusability
-   Brand consistency
-   Better developer experience

Dengan mengikuti panduan ini, Anda dapat membuat design system yang robust dan mudah dikelola!
