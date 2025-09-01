<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Import Example - Laravel dengan Vite</title>
    @vite(['resources/css/app.css', 'resources/css/global.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen p-8 bg-gray-25">
    <div class="max-w-6xl mx-auto">
        <h1 class="mb-8 text-4xl font-bold text-gray-900">CSS Import Example</h1>

        <!-- Button Examples dari global.css -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Button Examples dari global.css</h2>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-gray-700">Save Button</h3>
                    <button class="w-full btn-save">
                        Simpan Data
                    </button>
                    <p class="text-sm text-gray-500">Menggunakan class .btn-save</p>
                </div>

                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-gray-700">Brand Button</h3>
                    <button class="w-full btn-brand">
                        Brand Action
                    </button>
                    <p class="text-sm text-gray-500">Menggunakan class .btn-brand</p>
                </div>

                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-gray-700">Error Button</h3>
                    <button class="w-full btn-error">
                        Hapus Data
                    </button>
                    <p class="text-sm text-gray-500">Menggunakan class .btn-error</p>
                </div>

                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-gray-700">Warning Button</h3>
                    <button class="w-full btn-warning">
                        Perhatian
                    </button>
                    <p class="text-sm text-gray-500">Menggunakan class .btn-warning</p>
                </div>
            </div>
        </section>

        <!-- Card Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Card Examples</h2>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="custom-card">
                    <h3 class="mb-2 text-lg font-semibold text-gray-800">Custom Card</h3>
                    <p class="text-gray-600">Card ini menggunakan class .custom-card dari global.css</p>
                </div>

                <div class="custom-card">
                    <h3 class="mb-2 text-lg font-semibold text-gray-800">Hover Effect</h3>
                    <p class="text-gray-600">Hover untuk melihat shadow effect yang berubah</p>
                </div>

                <div class="custom-card">
                    <h3 class="mb-2 text-lg font-semibold text-gray-800">CSS Variables</h3>
                    <p class="text-gray-600">Menggunakan CSS variables untuk konsistensi</p>
                </div>
            </div>
        </section>

        <!-- Input Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Input Examples</h2>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Custom Input</label>
                    <input type="text" placeholder="Masukkan teks..." class="w-full custom-input">
                    <p class="mt-1 text-sm text-gray-500">Menggunakan class .custom-input</p>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Focus & Hover</label>
                    <input type="email" placeholder="email@example.com" class="w-full custom-input">
                    <p class="mt-1 text-sm text-gray-500">Focus dan hover untuk melihat effect</p>
                </div>
            </div>
        </section>

        <!-- Badge Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Badge Examples</h2>

            <div class="flex flex-wrap gap-4">
                <span class="badge-success">Success</span>
                <span class="badge-error">Error</span>
                <span class="badge-warning">Warning</span>
                <span class="badge-brand">Brand</span>
            </div>
        </section>

        <!-- Alert Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Alert Examples</h2>

            <div class="space-y-4">
                <div class="alert-success">
                    <strong>Success!</strong> Data berhasil disimpan.
                </div>

                <div class="alert-error">
                    <strong>Error!</strong> Terjadi kesalahan saat menyimpan data.
                </div>

                <div class="alert-warning">
                    <strong>Warning!</strong> Pastikan semua field terisi dengan benar.
                </div>

                <div class="alert-brand">
                    <strong>Info!</strong> Ini adalah informasi penting.
                </div>
            </div>
        </section>

        <!-- Link Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Link Examples</h2>

            <div class="space-y-2">
                <a href="#" class="custom-link">Link dengan custom style</a>
                <br>
                <a href="#" class="custom-link">Hover untuk melihat effect</a>
            </div>
        </section>

        <!-- Kombinasi Tailwind + Custom CSS -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Kombinasi Tailwind + Custom CSS</h2>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div class="custom-card">
                    <h3 class="mb-4 text-lg font-semibold text-gray-800">Kombinasi Styles</h3>
                    <p class="mb-4 text-gray-600">Menggunakan Tailwind untuk layout dan custom CSS untuk komponen</p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="badge-success">Active</span>
                        <span class="badge-brand">New</span>
                    </div>

                    <div class="space-y-2">
                        <input type="text" placeholder="Input dengan custom style" class="w-full custom-input">
                        <button class="w-full btn-save">Simpan</button>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-theme-md">
                    <h3 class="mb-4 text-lg font-semibold text-gray-800">Tailwind Only</h3>
                    <p class="mb-4 text-gray-600">Menggunakan Tailwind CSS untuk semua styling</p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 text-sm rounded-full bg-success-100 text-success-700">Active</span>
                        <span class="px-3 py-1 text-sm rounded-full bg-brand-100 text-brand-700">New</span>
                    </div>

                    <div class="space-y-2">
                        <input type="text" placeholder="Input dengan Tailwind"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                        <button
                            class="w-full px-4 py-2 text-white transition-colors rounded-lg bg-success-500 hover:bg-success-600">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Code Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Code Examples</h2>

            <div class="p-6 text-gray-100 bg-gray-900 rounded-lg">
                <h3 class="mb-4 text-lg font-semibold">HTML untuk Button</h3>
                <pre class="text-sm"><code>&lt;button class="btn-save"&gt;Simpan Data&lt;/button&gt;</code></pre>

                <h3 class="mt-6 mb-4 text-lg font-semibold">HTML untuk Card</h3>
                <pre class="text-sm"><code>&lt;div class="custom-card"&gt;
    &lt;h3&gt;Judul Card&lt;/h3&gt;
    &lt;p&gt;Isi card...&lt;/p&gt;
&lt;/div&gt;</code></pre>

                <h3 class="mt-6 mb-4 text-lg font-semibold">HTML untuk Input</h3>
                <pre class="text-sm"><code>&lt;input type="text" class="custom-input" placeholder="Masukkan teks..."&gt;</code></pre>
            </div>
        </section>

        <!-- Import Information -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Cara Import CSS</h2>

            <div class="p-6 border border-blue-200 rounded-lg bg-blue-50">
                <h3 class="mb-4 text-lg font-semibold text-blue-800">✅ Cara yang Benar</h3>

                <div class="space-y-4">
                    <div>
                        <h4 class="mb-2 font-medium text-blue-700">1. Di Blade Template</h4>
                        <pre class="p-3 text-sm bg-blue-100 rounded"><code>@vite(['resources/css/app.css', 'resources/css/global.css', 'resources/js/app.js'])</code></pre>
                    </div>

                    <div>
                        <h4 class="mb-2 font-medium text-blue-700">2. Di app.css (Alternatif)</h4>
                        <pre class="p-3 text-sm bg-blue-100 rounded"><code>@import "tailwindcss/preflight";
@import "tailwindcss/utilities";
@import "./global.css";</code></pre>
                    </div>

                    <div>
                        <h4 class="mb-2 font-medium text-blue-700">3. Build CSS</h4>
                        <pre class="p-3 text-sm bg-blue-100 rounded"><code>npm run dev</code></pre>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
