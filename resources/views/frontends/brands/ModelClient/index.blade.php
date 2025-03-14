@extends('layouts.guest')

@section('content')
    <div class="m-0 p-0 overflow-hidden">
        <div class="relative h-screen w-full">
            <img src="https://www.toto.com/global_common_2019/index/images/img-pro-neorest.jpg"
                class="absolute top-0 left-0 w-full h-full object-cover" />
            <div class="absolute inset-0 bg-black/50"></div>
            {{-- Navbar --}}
            @component('components.navbar')
            @endcomponent
            {{-- content --}}
            <div class="relative z-10 w-full max-w-[130vh] 2xl:max-w-[146vh] ms-auto px-3 md:px-10 font-['Inter'] transition-all duration-300">
                @component('components.header-dark')
                @endcomponent
                <div class="w-full max-w-[114vh] me-auto">
                    <div class="z-10 mt-2 md:mt-[8rem] mb-[8rem] md:mb-[5rem] lg:mb-[8rem] xl:mt-4 xl:mb-[5rem]">
                        <nav aria-label="Breadcrumb">
                            <ol class="flex items-center gap-1 text-sm ">
                                <li>
                                    <a href="{{ route('home') }}"
                                        class="block transition text-white/50 hover:text-white {{ Route::is('home') ? 'text-white/100' : '' }}">
                                        <span class="sr-only"> Home </span>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </a>
                                </li>

                                <li class="rtl:rotate-180 text-white/50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>

                                <li>
                                    <a href="{{ route('brands.all') }}"
                                        class="block transition hover:text-white text-white/50 {{ Route::is('brands.all') ? 'text-white/100' : '' }}">
                                        {{$brands->name}}
                                    </a>
                                </li>
                                <li class="rtl:rotate-180 text-white/50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>

                                <li>
                                    <a href="{{ route('brands-client.show', $brands->uuid) }}"
                                        class="block transition hover:text-white text-white/50"> {{$products->name}} </a>
                                </li>
                                <li class="rtl:rotate-180 text-white/50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>
                                <li>
                                    <a href="{{ route('brands-client.model', [$brands->uuid, $products->uuid]) }}"
                                        class="block transition hover:text-white text-white"> Models</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="overflow-hidden relative after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[12vh] after:bg-gradient-to-b after:from-white/0 after:to-[#5f737f]/70 after:bg-opacity-100 after:backdrop-blur-[2px] after:z-10">
                        <div class="h-[54vh] lg:h-[58vh] w-full overflow-y-auto overflow-x-hidden scroll-smooth pb-[7rem] xl:pb-[6rem] 2xl:pb-[8rem]">
                            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 justify-center items-center gap-4 md:gap-7 rounded-sm">
                                @foreach ($model as $models)
                                    @if($models->product_id === $products->uuid)
                                        <a href="{{ route('brands-client.model-details', [$brands->uuid, $products->uuid, $models->uuid]) }}"
                                    class="w-fullhover:shadow-sm hover:scale-[1.01] transition-all duration-150 overflow-hidden">
                                    <article class="bg-white grid grid-cols-1 md:grid-cols-3 w-full">
                                        <img src="{{ $models->link }}"
                                            alt="" class="col-span-1 w-full h-fit object-contain object-center">
                                        <div class="relative col-span-2 p-2">
                                            <h1 class="text-[14px] md:text-xl font-medium mb-3 2xl:mb-7">
                                                {{ $models->name }}
                                            </h1>
                                            <div class="text-[11px] md:text-[14px] font-light mb-1">
                                                <p>NEWNEOREST NX</p>
                                                <p>Luxurious Smart Toilet</p>
                                            </div>
                                            <div class="absolute top-[-4%] right-3">
                                                <span class="bg-red-600 text-white px-2 py-[2px] text-[12px]">
                                                    New
                                                </span>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                                    @else
                                        <h1 class="text-xl text-[#ffffff]">Not Available!</h1>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="absolute inset-x-0 bottom-0 bg-white py-1">
                <p class="text-black text-[12px] text-center"> © Copyright 2024 SUNHOUR GROUP, All Rights Reserved</p>
            </footer>
        </div>
    </div>
@endsection
