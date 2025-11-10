<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Theme script -->
    <script>
        // On page load, check for saved theme preference or respect OS preference
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="font-sans antialiased bg-[#F2DFD3] dark:bg-[#1A1410] text-[#3D2817] dark:text-[#F5F1ED]"
    x-data="{ sidebarExpanded: true }"
    x-init="() => {
        document.addEventListener('sidebar-toggled', (event) => {
            sidebarExpanded = event.detail.expanded;
        });
    }">
    <!-- Fixed navigation sidebar -->
    @include('layouts.navigation')

    <!-- Main content area that shifts based on sidebar -->
    <div id="main-content"
        :class="{ 'lg:ml-64': sidebarExpanded, 'lg:ml-20': !sidebarExpanded }"
        class="transition-all duration-300 ease-in-out">
        <!-- SuperUser Alert Bar -->
        @hasrole('SuperUser')
        <div class="bg-red-600 text-white text-center py-2">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="font-medium">SuperUser Access - You have global permissions</p>
            </div>
        </div>
        @endhasrole

        <!-- Page Heading -->
        @isset($header)
        <header class="p-2 border-b border-[#E0D0C0] dark:border-[#4A4038] bg-[#F2DFD3] dark:bg-[#2B2420] shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main class="min-h-screen bg-[#F7F1ED] dark:bg-[#1A1410] pt-4">
            {{ $slot ?? '' }}
            @yield('content')
        </main>
    </div>
    <x-alert-modal /> {{-- Our confirmation modal --}}
</body>

</html>