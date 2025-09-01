# Panduan Import CSS di Laravel

## 🚨 **Masalah yang Anda Alami**

Pada file `resources/views/default.blade.php`, Anda menggunakan cara yang salah untuk import CSS:

### ❌ **Kode Sebelumnya (Salah)**

```html
<link rel="stylesheet" href="{{ asset('resources/css/global.css') }}" />
```

### ✅ **Kode yang Diperbaiki (Benar)**

```html
@vite(['resources/css/app.css', 'resources/css/global.css',
'resources/js/app.js'])
```

## 🔍 **Analisis Masalah**

### **1. Mengapa `asset()` Tidak Bekerja untuk `resources/`**

-   **`asset()` helper** hanya mengakses file di folder `public/`
-   **Folder `resources/`** tidak bisa diakses langsung dari browser
-   **Laravel menggunakan Vite** untuk mengelola asset dari `resources/`

### **2. Struktur Folder Laravel**

```
laravel-project/
├── public/          # File yang bisa diakses browser
├── resources/       # File source (tidak bisa diakses langsung)
│   ├── css/
│   │   ├── app.css
│   │   └── global.css
│   └── js/
└── storage/         # File yang di-generate
```

## 🎯 **Solusi Lengkap**

### **Solusi 1: Menggunakan Vite (Direkomendasikan)**

#### **A. Di `default.blade.php`**

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yellow Kost</title>

        <!-- ✅ BENAR: Menggunakan Vite -->
        @vite(['resources/css/app.css', 'resources/css/global.css',
        'resources/js/app.js'])
    </head>
    <body>
        <!-- Content -->
    </body>
</html>
```

#### **B. Di `vite.config.js` (jika perlu)**

```javascript
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/global.css", // Tambahkan ini
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
```

### **Solusi 2: Import di dalam app.css (Alternatif)**

#### **A. Di `resources/css/app.css`**

```css
@import "tailwindcss/preflight";
@import "tailwindcss/utilities";

/* Import global.css */
@import "./global.css";

/* Custom Theme CSS Variables */
:root {
    --color-brand-500: #465fff;
    /* ... dan seterusnya */
}
```

#### **B. Di `default.blade.php`**

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yellow Kost</title>

        <!-- Hanya import app.css -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <!-- Content -->
    </body>
</html>
```

### **Solusi 3: Memindahkan ke Public (Tidak Direkomendasikan)**

#### **A. Pindahkan file ke `public/css/`**

```bash
# Pindahkan file
mv resources/css/global.css public/css/global.css
```

#### **B. Di `default.blade.php`**

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yellow Kost</title>

        <!-- Menggunakan asset() untuk file di public/ -->
        <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <!-- Content -->
    </body>
</html>
```

## 📋 **Perbandingan Metode**

| Metode           | Keuntungan                            | Kerugian               | Rekomendasi |
| ---------------- | ------------------------------------- | ---------------------- | ----------- |
| **Vite**         | ✅ Hot reload, bundling, optimization | ❌ Perlu build process | ⭐⭐⭐⭐⭐  |
| **Import CSS**   | ✅ Mudah, satu file                   | ❌ Tidak terpisah      | ⭐⭐⭐⭐    |
| **Public Asset** | ✅ Langsung akses                     | ❌ Tidak di-bundle     | ⭐⭐        |

## 🔧 **Troubleshooting**

### **CSS Tidak Muncul?**

1. ✅ **Jalankan Vite**: `npm run dev` atau `npm run build`
2. ✅ **Periksa Path**: Pastikan path file benar
3. ✅ **Periksa Cache**: Clear cache browser dan Laravel
4. ✅ **Periksa Console**: Lihat error di browser console

### **Hot Reload Tidak Bekerja?**

1. ✅ **Jalankan Vite Dev**: `npm run dev`
2. ✅ **Periksa Port**: Pastikan port tidak terblokir
3. ✅ **Periksa Network**: Pastikan tidak ada masalah network

### **Build Error?**

1. ✅ **Periksa Syntax**: Pastikan CSS syntax benar
2. ✅ **Periksa Import**: Pastikan file yang diimport ada
3. ✅ **Periksa Dependencies**: Pastikan semua dependencies terinstall

## 📁 **Struktur File yang Benar**

### **Untuk Solusi 1 (Vite)**

```
resources/
├── css/
│   ├── app.css          # Tailwind + Custom CSS
│   └── global.css       # Custom CSS tambahan
├── js/
│   └── app.js           # JavaScript
└── views/
    └── default.blade.php # Template dengan @vite
```

### **Untuk Solusi 2 (Import)**

```
resources/
├── css/
│   └── app.css          # Semua CSS di satu file
├── js/
│   └── app.js           # JavaScript
└── views/
    └── default.blade.php # Template dengan @vite
```

## 🎨 **Contoh Penggunaan**

### **File `resources/css/global.css`**

```css
/* Custom Button Styles */
.btn-save {
    background-color: #12b76a;
    color: #fff;
    border: none;
    border-radius: 0.5rem;
    padding: 0.5rem 1rem;
    cursor: pointer;
    transition: background-color 0.2s ease;
}

.btn-save:hover {
    background-color: #039855;
}

/* Custom Card Styles */
.custom-card {
    background: white;
    border-radius: 0.75rem;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
}
```

### **File `resources/views/default.blade.php`**

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yellow Kost</title>

        <!-- Import semua CSS -->
        @vite(['resources/css/app.css', 'resources/css/global.css',
        'resources/js/app.js'])
    </head>
    <body>
        <!-- Menggunakan class dari global.css -->
        <button class="btn-save">Simpan Data</button>

        <div class="custom-card">
            <h2>Judul Card</h2>
            <p>Isi card...</p>
        </div>
    </body>
</html>
```

## 🚀 **Best Practices**

### **1. Gunakan Vite untuk Development**

```bash
# Development dengan hot reload
npm run dev

# Production build
npm run build
```

### **2. Organisasi File CSS**

```css
/* resources/css/app.css */
@import "tailwindcss/preflight";
@import "tailwindcss/utilities";

/* Import custom CSS */
@import "./global.css";
@import "./components.css";
@import "./utilities.css";
```

### **3. Naming Convention**

```css
/* Gunakan prefix untuk custom class */
.btn-save {
}
.card-custom {
}
.text-brand {
}
```

### **4. Responsive Design**

```css
/* Gunakan Tailwind untuk responsive */
.custom-card {
    @apply bg-white rounded-lg shadow-md p-6;
}

@media (min-width: 768px) {
    .custom-card {
        @apply p-8;
    }
}
```

## 🎯 **Kesimpulan**

**Solusi Terbaik**: Gunakan **Vite** untuk import CSS di Laravel:

1. ✅ **Tambahkan file ke Vite**: `@vite(['resources/css/app.css', 'resources/css/global.css', 'resources/js/app.js'])`
2. ✅ **Jalankan build**: `npm run dev` atau `npm run build`
3. ✅ **Gunakan class**: Class dari `global.css` akan tersedia di seluruh aplikasi

Dengan cara ini, CSS Anda akan ter-bundle dengan benar dan mendapatkan semua keuntungan dari Vite! 🎉
