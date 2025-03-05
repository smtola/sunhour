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

    @vite('resources/css/app.css')
</head>

<body cz-shortcut-listen="true" class="bg-gray-200 text-gray-900 overflow-hidden">
    <div class="hidden xl:grid grid-cols-12 transition-all duration-300" id="content">
        <aside id="sidebar" class="col-span-2 flex flex-col justify-between w-full bg-gray-800 shadow-md p-4 h-screen">
            <div>
                <a id="logo" data-tip="Home" href="{{ route('dashboard.index') }}" class="flex items-center gap-2">
                    <img src="{{ asset('logo.svg') }}" alt="Logo" class="w-14 h-14 rounded-full">
                    <span id="logo-title" class="text-white text-2xl font-bold">
                        {{ config('app.name') }}
                    </span>
                </a>
                <div>
                    <ul class="mt-8 text-gray-100 flex flex-col space-y-3">
                        <li>
                            <a data-tip="Dashboard" href="{{ route('dashboard.index') }}" class="flex items-center gap-2 {{ Route::is('dashboard.index') ? 'bg-gray-500' : '' }} rounded-full transition-all duration-300 px-4 py-1 listItem">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                                        <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"></path>
                                        <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1"></path>
                                        <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"></path>
                                        <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1"></path>
                                    </svg>
                                </span>
                                <p class="title">
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li>
                            <a data-tip="Home" href="{{ route('brands.index') }}" class="flex items-center gap-2 {{ Route::is('brands.index') ? 'bg-gray-500' : '' }} rounded-full transition-all duration-300 px-4 py-1 listItem">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                                    <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M19 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M5 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M7 12h3l3.5 6h3.5"></path>
                                    <path d="M17 6h-3.5l-3.5 6"></path>
                                    </svg>
                                </span>
                                <p class="title">
                                    Brands
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- Profile and Logout --}}
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="flex items-center justify-center gap-2 px-3 py-1 bg-gray-50 rounded-lg text-gray-800">
                <span class="text-white text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                    <path d="M9 12h12l-3 -3"></path>
                    <path d="M18 15l3 -3"></path>
                    </svg>
                </span>
                <p class=" rounded-full text-2xl font-bold">
                    Logout
                </p>
            </button>
            </form>
        </aside>
        <main id="main" class="col-span-10 p-5">
                <h1 class="text-3xl font-bold underline">
                    @yield('title')
                </h1>
                @yield('content')
        </main>
    </div>
    <div class="xl:hidden bg-warning/20 transition-all duration-300">
        <div class="flex items-center justify-center h-screen">
            <h1 class="text-2xl font-bold text-warning">
                Not available on mobile and tablet
            </h1>
        </div>
    </div>
</body>
</html>
