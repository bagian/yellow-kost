<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover Examples - Custom Theme Tailwind CSS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen p-8 bg-gray-25">
    <div class="max-w-6xl mx-auto">
        <h1 class="mb-8 text-4xl font-bold text-gray-900">Hover Examples dengan Custom Theme</h1>

        <!-- Button Hover Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Button Hover Examples</h2>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                <!-- Success Button - BENAR -->
                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-gray-700">Success Button (Benar)</h3>
                    <button
                        class="w-full px-6 py-3 font-medium text-white transition-colors duration-200 rounded-lg bg-success-500 hover:bg-success-600">
                        Success Button
                    </button>
                    <p class="text-sm text-gray-500">hover:bg-success-600 (lebih gelap)</p>
                </div>

                <!-- Success Button - SALAH -->
                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-gray-700">Success Button (Salah)</h3>
                    <button
                        class="w-full px-6 py-3 font-medium text-white transition-colors duration-200 rounded-lg bg-success-500 hover:bg-success-200">
                        Success Button
                    </button>
                    <p class="text-sm text-gray-500">hover:bg-success-200 (lebih terang, teks tidak terbaca)</p>
                </div>

                <!-- Brand Button -->
                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-gray-700">Brand Button</h3>
                    <button
                        class="w-full px-6 py-3 font-medium text-white transition-colors duration-200 rounded-lg bg-brand-500 hover:bg-brand-600">
                        Brand Button
                    </button>
                    <p class="text-sm text-gray-500">hover:bg-brand-600</p>
                </div>

                <!-- Error Button -->
                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-gray-700">Error Button</h3>
                    <button
                        class="w-full px-6 py-3 font-medium text-white transition-colors duration-200 rounded-lg bg-error-500 hover:bg-error-600">
                        Error Button
                    </button>
                    <p class="text-sm text-gray-500">hover:bg-error-600</p>
                </div>
            </div>
        </section>

        <!-- Card Hover Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Card Hover Examples</h2>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <!-- Card dengan Shadow Hover -->
                <div
                    class="p-6 transition-shadow duration-300 bg-white rounded-lg cursor-pointer shadow-theme-sm hover:shadow-theme-lg">
                    <h3 class="mb-2 text-lg font-semibold text-gray-800">Card dengan Shadow Hover</h3>
                    <p class="text-gray-600">Hover untuk melihat shadow yang lebih besar</p>
                </div>

                <!-- Card dengan Background Hover -->
                <div class="p-6 transition-colors duration-200 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <h3 class="mb-2 text-lg font-semibold text-gray-800">Card dengan Background Hover</h3>
                    <p class="text-gray-600">Hover untuk mengubah background</p>
                </div>

                <!-- Card dengan Border Hover -->
                <div
                    class="p-6 transition-colors duration-200 bg-white border-2 border-transparent rounded-lg cursor-pointer hover:border-brand-300">
                    <h3 class="mb-2 text-lg font-semibold text-gray-800">Card dengan Border Hover</h3>
                    <p class="text-gray-600">Hover untuk menampilkan border</p>
                </div>
            </div>
        </section>

        <!-- Link Hover Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Link Hover Examples</h2>

            <div class="space-y-4">
                <div>
                    <a href="#"
                        class="font-medium transition-colors duration-200 text-brand-500 hover:text-brand-600">
                        Link dengan Brand Color
                    </a>
                    <p class="mt-1 text-sm text-gray-500">hover:text-brand-600</p>
                </div>

                <div>
                    <a href="#"
                        class="font-medium transition-colors duration-200 text-success-500 hover:text-success-600">
                        Link dengan Success Color
                    </a>
                    <p class="mt-1 text-sm text-gray-500">hover:text-success-600</p>
                </div>

                <div>
                    <a href="#"
                        class="font-medium transition-colors duration-200 text-error-500 hover:text-error-600">
                        Link dengan Error Color
                    </a>
                    <p class="mt-1 text-sm text-gray-500">hover:text-error-600</p>
                </div>
            </div>
        </section>

        <!-- Input Hover Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Input Hover Examples</h2>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Input dengan Hover Border</label>
                    <input type="text" placeholder="Hover untuk melihat border"
                        class="w-full px-4 py-2 transition-colors duration-200 border border-gray-300 rounded-lg hover:border-brand-300 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                    <p class="mt-1 text-sm text-gray-500">hover:border-brand-300</p>
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700">Input dengan Hover Background</label>
                    <input type="text" placeholder="Hover untuk mengubah background"
                        class="w-full px-4 py-2 transition-colors duration-200 border border-gray-300 rounded-lg hover:bg-gray-50 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                    <p class="mt-1 text-sm text-gray-500">hover:bg-gray-50</p>
                </div>
            </div>
        </section>

        <!-- Icon Hover Examples -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Icon Hover Examples</h2>

            <div class="flex space-x-6">
                <div class="text-center">
                    <div
                        class="flex items-center justify-center w-12 h-12 transition-colors duration-200 bg-gray-100 rounded-lg cursor-pointer hover:bg-brand-100">
                        <svg class="w-6 h-6 text-gray-600 transition-colors duration-200 hover:text-brand-600"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Icon dengan Background & Color Hover</p>
                </div>

                <div class="text-center">
                    <div
                        class="flex items-center justify-center w-12 h-12 transition-colors duration-200 rounded-lg cursor-pointer bg-success-100 hover:bg-success-200">
                        <svg class="w-6 h-6 transition-colors duration-200 text-success-600 hover:text-success-700"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Success Icon Hover</p>
                </div>

                <div class="text-center">
                    <div
                        class="flex items-center justify-center w-12 h-12 transition-colors duration-200 rounded-lg cursor-pointer bg-error-100 hover:bg-error-200">
                        <svg class="w-6 h-6 transition-colors duration-200 text-error-600 hover:text-error-700"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Error Icon Hover</p>
                </div>
            </div>
        </section>

        <!-- Best Practices -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Best Practices untuk Hover</h2>

            <div class="p-6 bg-white rounded-lg shadow-theme-md">
                <h3 class="mb-4 text-lg font-semibold text-gray-800">Prinsip Hover yang Benar:</h3>

                <div class="space-y-3">
                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-500 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-gray-800">Untuk Button dengan Text Putih</p>
                            <p class="text-sm text-gray-600">Gunakan hover dengan warna yang lebih gelap (600, 700,
                                800)</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-500 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-gray-800">Untuk Link dan Text</p>
                            <p class="text-sm text-gray-600">Gunakan hover dengan warna yang lebih gelap (600, 700)</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-500 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-gray-800">Untuk Background Elements</p>
                            <p class="text-sm text-gray-600">Gunakan hover dengan warna yang lebih terang (50, 100,
                                200)</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="w-6 h-6 bg-success-500 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-gray-800">Selalu Tambahkan Transition</p>
                            <p class="text-sm text-gray-600">Gunakan transition-colors duration-200 untuk animasi yang
                                smooth</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Common Mistakes -->
        <section class="mb-12">
            <h2 class="mb-6 text-2xl font-semibold text-gray-800">Kesalahan Umum</h2>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div class="p-6 border border-red-200 rounded-lg bg-red-50">
                    <h3 class="mb-3 text-lg font-semibold text-red-800">❌ Kesalahan</h3>
                    <div class="space-y-2">
                        <p class="text-sm text-red-700">• Button putih dengan hover terang</p>
                        <p class="text-sm text-red-700">• Tidak ada transition</p>
                        <p class="text-sm text-red-700">• Kontras yang buruk</p>
                        <p class="text-sm text-red-700">• Hover yang tidak konsisten</p>
                    </div>
                </div>

                <div class="p-6 border border-green-200 rounded-lg bg-green-50">
                    <h3 class="mb-3 text-lg font-semibold text-green-800">✅ Benar</h3>
                    <div class="space-y-2">
                        <p class="text-sm text-green-700">• Button putih dengan hover gelap</p>
                        <p class="text-sm text-green-700">• Ada transition smooth</p>
                        <p class="text-sm text-green-700">• Kontras yang baik</p>
                        <p class="text-sm text-green-700">• Hover yang konsisten</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
