<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Theme Tailwind CSS - Contoh Penggunaan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-25 min-h-screen p-8">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-900 mb-8">Custom Theme Tailwind CSS</h1>

        <!-- Brand Colors Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Brand Colors</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-brand-25 p-4 rounded-lg border border-gray-200">
                    <div class="w-full h-16 bg-brand-25 rounded mb-2"></div>
                    <p class="text-sm font-medium text-gray-700">brand-25</p>
                    <p class="text-xs text-gray-500">#f2f7ff</p>
                </div>
                <div class="bg-brand-50 p-4 rounded-lg border border-gray-200">
                    <div class="w-full h-16 bg-brand-50 rounded mb-2"></div>
                    <p class="text-sm font-medium text-gray-700">brand-50</p>
                    <p class="text-xs text-gray-500">#ecf3ff</p>
                </div>
                <div class="bg-brand-100 p-4 rounded-lg border border-gray-200">
                    <div class="w-full h-16 bg-brand-100 rounded mb-2"></div>
                    <p class="text-sm font-medium text-gray-700">brand-100</p>
                    <p class="text-xs text-gray-500">#dde9ff</p>
                </div>
                <div class="bg-brand-500 p-4 rounded-lg border border-gray-200">
                    <div class="w-full h-16 bg-brand-500 rounded mb-2"></div>
                    <p class="text-sm font-medium text-white">brand-500</p>
                    <p class="text-xs text-brand-100">#465fff</p>
                </div>
                <div class="bg-brand-900 p-4 rounded-lg border border-gray-200">
                    <div class="w-full h-16 bg-brand-900 rounded mb-2"></div>
                    <p class="text-sm font-medium text-white">brand-900</p>
                    <p class="text-xs text-brand-100">#262e89</p>
                </div>
                <div class="bg-brand-950 p-4 rounded-lg border border-gray-200">
                    <div class="w-full h-16 bg-brand-950 rounded mb-2"></div>
                    <p class="text-sm font-medium text-white">brand-950</p>
                    <p class="text-xs text-brand-100">#161950</p>
                </div>
            </div>
        </section>

        <!-- Success, Error, Warning Colors -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Status Colors</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Success -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-700">Success Colors</h3>
                    <div class="space-y-2">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-success-500 rounded-full"></div>
                            <span class="text-sm text-gray-600">success-500</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-success-600 rounded-full"></div>
                            <span class="text-sm text-gray-600">success-600</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-success-700 rounded-full"></div>
                            <span class="text-sm text-gray-600">success-700</span>
                        </div>
                    </div>
                </div>

                <!-- Error -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-700">Error Colors</h3>
                    <div class="space-y-2">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-error-500 rounded-full"></div>
                            <span class="text-sm text-gray-600">error-500</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-error-600 rounded-full"></div>
                            <span class="text-sm text-gray-600">error-600</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-error-700 rounded-full"></div>
                            <span class="text-sm text-gray-600">error-700</span>
                        </div>
                    </div>
                </div>

                <!-- Warning -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-700">Warning Colors</h3>
                    <div class="space-y-2">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-warning-500 rounded-full"></div>
                            <span class="text-sm text-gray-600">warning-500</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-warning-600 rounded-full"></div>
                            <span class="text-sm text-gray-600">warning-600</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-warning-700 rounded-full"></div>
                            <span class="text-sm text-gray-600">warning-700</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Custom Shadows -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Custom Shadows</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-theme-xs border border-gray-200">
                    <h3 class="font-medium text-gray-700 mb-2">shadow-theme-xs</h3>
                    <p class="text-sm text-gray-500">Shadow paling kecil untuk elemen subtle</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-theme-sm border border-gray-200">
                    <h3 class="font-medium text-gray-700 mb-2">shadow-theme-sm</h3>
                    <p class="text-sm text-gray-500">Shadow kecil untuk card dan button</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-theme-md border border-gray-200">
                    <h3 class="font-medium text-gray-700 mb-2">shadow-theme-md</h3>
                    <p class="text-sm text-gray-500">Shadow medium untuk modal dan dropdown</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-theme-lg border border-gray-200">
                    <h3 class="font-medium text-gray-700 mb-2">shadow-theme-lg</h3>
                    <p class="text-sm text-gray-500">Shadow besar untuk sidebar dan drawer</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-theme-xl border border-gray-200">
                    <h3 class="font-medium text-gray-700 mb-2">shadow-theme-xl</h3>
                    <p class="text-sm text-gray-500">Shadow extra large untuk header dan footer</p>
                </div>
            </div>
        </section>

        <!-- Custom Spacing & Border Radius -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Custom Spacing & Border Radius</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Custom Spacing -->
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-4">Custom Spacing</h3>
                    <div class="space-y-4">
                        <div class="bg-brand-100 p-18 rounded-lg">
                            <p class="text-center text-brand-800 font-medium">p-18 (4.5rem)</p>
                        </div>
                        <div class="bg-success-100 p-88 rounded-lg">
                            <p class="text-center text-success-800 font-medium">p-88 (22rem)</p>
                        </div>
                        <div class="bg-warning-100 p-128 rounded-lg">
                            <p class="text-center text-warning-800 font-medium">p-128 (32rem)</p>
                        </div>
                    </div>
                </div>

                <!-- Custom Border Radius -->
                <div>
                    <h3 class="text-lg font-medium text-gray-700 mb-4">Custom Border Radius</h3>
                    <div class="space-y-4">
                        <div class="bg-gray-100 p-6 rounded-4xl">
                            <p class="text-center text-gray-700 font-medium">rounded-4xl (2rem)</p>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-5xl">
                            <p class="text-center text-gray-700 font-medium">rounded-5xl (2.5rem)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Custom Animations -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Custom Animations</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg border border-gray-200 animate-fade-in">
                    <h3 class="font-medium text-gray-700 mb-2">Fade In Animation</h3>
                    <p class="text-sm text-gray-500">Elemen ini muncul dengan animasi fade in</p>
                </div>
                <div class="bg-white p-6 rounded-lg border border-gray-200 animate-slide-up">
                    <h3 class="font-medium text-gray-700 mb-2">Slide Up Animation</h3>
                    <p class="text-sm text-gray-500">Elemen ini muncul dengan animasi slide up</p>
                </div>
            </div>
        </section>

        <!-- Button Examples -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Button Examples</h2>
            <div class="flex flex-wrap gap-4">
                <button
                    class="bg-brand-500 hover:bg-brand-600 text-white px-6 py-3 rounded-lg shadow-theme-md transition-colors">
                    Primary Button
                </button>
                <button
                    class="bg-success-500 hover:bg-success-600 text-white px-6 py-3 rounded-lg shadow-theme-md transition-colors">
                    Success Button
                </button>
                <button
                    class="bg-error-500 hover:bg-error-600 text-white px-6 py-3 rounded-lg shadow-theme-md transition-colors">
                    Error Button
                </button>
                <button
                    class="bg-warning-500 hover:bg-warning-600 text-white px-6 py-3 rounded-lg shadow-theme-md transition-colors">
                    Warning Button
                </button>
            </div>
        </section>
    </div>
</body>

</html>
