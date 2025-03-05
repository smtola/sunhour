@extends('layouts.guest')

@section('content')
    <div class="m-0 p-0 overflow-hidden">
        <div class="relative h-screen w-full">
            <img src="https://www.toto.com/en/neorestcollections/images/p_mainv_sp.jpg" class="absolute top-0 left-0 w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            {{-- Navbar --}}
                @component('components.navbar')
                @endcomponent
            {{-- content --}}
            <div class="relative z-10 w-full max-w-[140vh] ms-auto px-10 font-['Inter'] transition-all duration-300">
                @component('components.header-dark')
                @endcomponent
                <div class="w-full max-w-[100vh] me-auto">
                    <div class="z-10 mt-4 mb-[6rem]">
                        <nav aria-label="Breadcrumb">
                        <ol class="flex items-center gap-1 text-sm ">
                            <li>
                                <a href="{{ route('home')}}" class="block transition text-white/50 hover:text-white {{ Route::is('home') ? 'text-white/100' : '' }}">
                                    <span class="sr-only"> Home </span>

                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-4"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                                    />
                                    </svg>
                                </a>
                            </li>

                            <li class="rtl:rotate-180 text-white/50">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-4"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                    />
                                </svg>
                            </li>

                            <li>
                                <a href="{{ route('brands.all')}}" class="block transition hover:text-white text-white/50 {{ Route::is('brands.all') ? 'text-white/100' : '' }}"> {{$brand}} </a>
                            </li>
                            <li class="rtl:rotate-180 text-white/50">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="size-4"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                    />
                                </svg>
                            </li>

                            <li>
                                <a href="{{ route('brands-client.show', $brand)}}" class="block transition hover:text-white text-white"> Products </a>
                            </li>
                        </ol>
                        </nav>
                    </div>
                    <h1 class="text-[64px] font-bold text-white font-[Ponomar] mb-[1em]">
                        {{$brand}}
                    </h1>
                    <div class="h-[31vh] bg-black/70 overflow-y-scroll scroll-smooth rounded-sm">
                        <ul class="p-10 space-y-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center items-center">
                            <li>
                                <a href="{{ route('brands-client.model', [$brand, 'Toilet']) }}" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Toilet</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Wall Hung Toilet</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Under Counter Lavatories</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Neorest</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Concealed Tank</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Wall Hung Lavatories</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Washlet/Washlet+</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Bidet</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Flotation Hub</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Ecowasher</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Console Lavatories</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Pearl Acr ylic Bat htub</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">One Piece Toilet</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Self Rimming Lavatories</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Acr ylic Bat htub</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Close-Coupled Toilet</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Semi Recessed Lavatories</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center w-full group">
                                    <span class="h-[2px] w-0 bg-white mt-[10px] group-hover:w-[10%] transition-all duration-300"></span>
                                    <span class="text-white">Faucet</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <footer class="absolute inset-x-0 bottom-0 bg-white py-1">
                <p class="text-black text-[12px] text-center"> © Copyright 2024 SUNHOUR GROUP, All Rights Reserved</p>
            </footer>
        </div>
    </div>
@endsection
