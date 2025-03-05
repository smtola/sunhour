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
            <div class="absolute inset-0 bg-black/70"></div>
                {{-- Navbar --}}
                @component('components.navbar')
                @endcomponent

            <div class="relative z-10 w-full max-w-[146vh] ms-auto px-10 font-['Inter']">
                {{-- Header --}}
                @component('components.header-dark')
                @endcomponent
                {{-- content --}}
                <div class="w-full max-w-[110vh] me-auto mt-[8rem]">
                    <h1 class="text-[64px] font-normal text-white mb-[1rem]">
                        About Us
                    </h1>
                    <div class="bg-black/50 p-[2em] rounded-sm w-full">
                        <p class="text-white text-[24px] font-light">Our Story</p>
                        
                        <p class="text-white text-[16px] font-light text-pretty whitespace-pre-line">
                            In Cambodia, SUN HOUR GROUP impor ts and distributes ranges of trusted and well known brands which have been tested and recommended for its qualityin enlightening your homes.

                            Beginning business as early as 1990 and officially founded in 1996 as an enterprise in Phnom Penh City, over 20 years later, the SUN HOUR GROUP has gone to become the distributor of many international and cutting-edge brands (TOTO, Ariston Thermo Group, etc) related to water heater devices, water pumps, bathroom accessory and floor tiles. The home countries of those products are: Japan, Italy, United Arab Emirate, and others.

                            For years, it has been our honor to ser ve and simplify our customers’ daily life. We are privileged to connect millions of Cambodians with exceptional famous products wit h a capacity to stand against t he test of time and erosion.
                        </p>
                    </div>
                </div>
            </div>
            <footer class="absolute inset-x-0 bottom-0 bg-white py-1">
                <p class="text-black text-[12px] text-center"> © Copyright 2024 SUNHOUR GROUP, All Rights Reserved</p>
            </footer>
        </div>
    </div>
@endsection
