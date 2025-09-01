<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Yellow Kost</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{
    darkMode: false,
    sidebarToggle: false,
    menuToggle: true,
    page: 'ecommerce',
    loaded: true
}" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode') || 'false');
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark bg-gray-900': darkMode === true }"
    class="bg-gray-50">
    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
        <!-- ===== Sidebar Start ===== -->
        @include('sidebar')
        <!-- ===== Sidebar End ===== -->

        <!-- ===== Content Area Start ===== -->
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
            <!-- ===== Header Start ===== -->
            @include('header')
            <!-- ===== Header End ===== -->

            <!-- ===== Main Content Start ===== -->
            <main class="flex-1 p-6">
                <!-- Form Input -->
                @include('partials.forms-input.forminputs')
                <!-- Form Input -->

            </main>
            <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
</body>

</html>
