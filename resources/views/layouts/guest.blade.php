<!DOCTYPE html>
<html class="bg-gray-200 text-gray-900" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'SUNHOUR') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Styles / Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Ponomar&display=swap');
    </style>
    @vite('resources/css/app.css')
</head>

<body onload="hideLoadingScreen()" class="bg-white text-gray-900 overflow-hidden">
    <div id="loading" class="!hidden bg-black flex flex-col justify-center items-center fixed inset-0 w-full h-full z-[20000]">
            <video class="w-[40vh] object-cover object-center" autoplay loop  playsinline muted>
                <source src="{{asset('loading.mp4')}}" type="video/mp4">
            </video>
    </div>
    @yield('content')

    <script>
        const loading = document.getElementById('loading');

        function hideLoadingScreen() {
            loading.classList.add('!hidden');
        }

        // Show the loading screen immediately on page load
        window.addEventListener('DOMContentLoaded', () => {
            loading.classList.remove('!hidden');
        });
    </script>
</body>
</html>
