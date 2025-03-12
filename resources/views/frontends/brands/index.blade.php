@extends('layouts.guest')

@section('content')
    <div class="m-0 p-0 overflow-hidden">
        <div class="relative h-screen w-full">
            <img src="https://s3-alpha-sig.figma.com/img/9f3a/82b4/153c8a3a5316f76639b5639fda6067eb?Expires=1742169600&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=V4-17MeXUUl~q97ya3C9JgSBF2gvAfj0FimatXffqeAgj6ylclfU3jOKhaUt4ux5m1zG6Nd6Qb-sVtFirOW5Z3av9hLVDEGZnlojzaLFqBkZHBuXVvGws-2O2nOjaUdQ9EE8mGbLQNO33hVGdiwKweyZ4q4bX09z9sSgckJCIycpMKa~DB3mobmNF4KOTXIv0cPOClDlnsLYc-anI-9gPaWTMYkw65itRqKlya5-P0c9y~rZWNMgz3NhCsJs45sYqLT7C7rZRyfZROR3CjoFVMAMAaphztf0-9IN0-FF4OrSYiDlgWxX71TUM3ypLgjXRMW2yp~KV10b9xiE5oAYKg__" class="absolute top-0 left-0 w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-black opacity-50"></div>
            {{-- Navbar --}}
                @component('components.navbar')
                @endcomponent
            {{-- content --}}
            <div class="relative z-10 w-full max-w-[127vh] 2xl:max-w-[146vh] ms-auto px-3 md:px-10 font-['Inter'] transition-all duration-300">
                @component('components.header-dark')
                @endcomponent
                <div class="w-full max-w-[114vh] me-auto">
                    <div class="z-10 mt-[10px] md:mt-[7rem] xl:mt-4 mb-[3.5rem] md:mb-[1rem] 2xl:mb-[2rem]">
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
                                <a href="{{ route('brands.all')}}" class="block transition hover:text-white text-white"> Brands </a>
                            </li>
                        </ol>
                        </nav>
                    </div>
                    <h1 class="text-center md:text-start text-[32px] md:text-[64px] font-normal text-white  mb-[10px]">
                            Brands
                    </h1>
                    <div class="overflow-hidden h-[49vh]">
                        <div class="overflow-y-auto scroll-smooth grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 justify-center items-center gap-6 rounded-sm">
                           @foreach ($brand as $brands)
                               <a href="{{ route('brands-client.show',$brands->uuid) }}" class="inline-flex justify-center  bg-transparent px-[5em] py-[16px] w-full h-fit border-b-2 border-white group hover:bg-gray-200 hover:border-black transition-all duration-300">
                                    <span class="mx-auto !text-white group-hover:!text-black transition-all duration-300 ">
                                        {!! $brands->logoSvg !!}
                                    </span>
                                </a>
                           @endforeach
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
