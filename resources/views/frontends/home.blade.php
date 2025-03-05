@extends('layouts.guest')

@section('content')
    <div class="m-0 p-0 overflow-hidden">
        <div class="relative h-screen w-full">
            <video 
            autoplay muted loop
            class="absolute top-0 left-0 w-full h-full object-cover"
            >
                <source src="https://videos.pexels.com/video-files/3648257/3648257-uhd_2560_1440_30fps.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-black opacity-50"></div>
            {{-- Navbar --}}
            @component('components.navbar')
            @endcomponent

            {{-- content --}}
            <div class="relative z-10 w-full max-w-[135vh] ms-auto px-10">
                {{-- Header --}}
                @component('components.header-dark')
                @endcomponent

                <div class="bg-black/70 p-[3em] rounded-sm w-full max-w-[84vh] me-auto mt-[14rem] font-['Inter']">
                    <p class="text-white text-[24px] font-light">Welcome to</p>
                    <h1 class="text-[82px] font-bold text-white ">
                        SUNHOUR <span class="font-light">GROUP</span>
                    </h1>
                    <p class="text-white text-[18px] font-light text-pretty">
                        Sun Hur Group is a leading impor ter and distributor of genuine quality
                        products that have been tested to prove their benefits, safety, beauty,
                        and comfort to consumers and customers.
                    </p>
                </div>
            </div>
            
            {{-- footer --}}
            <footer class="absolute inset-x-0 bottom-0 bg-white py-1">
                <p class="text-black text-[12px] text-center"> © Copyright 2024 SUNHOUR GROUP, All Rights Reserved</p>
            </footer>
        </div>
    </div>
@endsection
