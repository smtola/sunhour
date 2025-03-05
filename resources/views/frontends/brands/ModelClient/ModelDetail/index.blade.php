@extends('layouts.guest')

@section('content')
    <div class="m-0 p-0 overflow-hidden">
        <div class="relative h-screen w-full">
            <div class="absolute inset-0 bg-white"></div>
            {{-- Navbar --}}
            @component('components.navbar')
            @endcomponent
            {{-- content --}}
            <div class="relative z-10 w-full 2xl:max-w-[150vh] ms-auto px-10 font-['Inter'] transition-all duration-300">
                @component('components.header-light')
                @endcomponent
                <div class="w-full me-auto">
                    <div class="z-10 mt-4 mb-[5rem]">
                        <nav aria-label="Breadcrumb">
                            <ol class="flex items-center gap-1 text-sm ">
                                <li>
                                    <a href="{{ route('home') }}"
                                        class="block transition text-gray-500 hover:text-gray-800 {{ Route::is('home') ? 'text-gray-800' : '' }}">
                                        <span class="sr-only"> Home </span>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </a>
                                </li>

                                <li class="rtl:rotate-180 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>

                                <li>
                                    <a href="{{ route('brands.all') }}"
                                        class="block transition hover:text-gray-800 text-gray-500 {{ Route::is('brands.all') ? 'text-gray-800' : '' }}">
                                        {{ $brand }}
                                    </a>
                                </li>
                                <li class="rtl:rotate-180 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>

                                <li>
                                    <a href="{{ route('brands-client.model', [$product,$brand]) }}"
                                        class="block transition hover:text-gray-800 text-gray-500">
                                        {{ $product }}
                                    </a>
                                </li>
                                <li class="rtl:rotate-180 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </li>
                                <li>
                                    <p class="text-gray-800">
                                        {{ $model }}
                                    </p>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-7 rounded-sm">
                        <div class="w-full h-[70vh]">
                            <div>
                                <h1 class="text-2xl font-bold">{{ $model }}</h1>
                                <div class="inline-flex items-center">
                                    <span class="h-[3px] bg-black w-[50px] mt-[1em]"></span>
                                    <h1 class="text-3xl text-[#C41230] font-bold">NEOREST NX II</h1>
                                </div>

                                <img src="https://s3-alpha-sig.figma.com/img/7bd2/f9b4/1ec5cd6b753c60b1abbd6edb1fb65323?Expires=1742169600&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=dpAuvoCybiX7KVZwYsVR-AingZXyNdzafQqOmh3wDqJdGGJMgiPYeK~AY0bFUudQ4IsQwiekfSbbDQP~YrFihCYe~XkMknFM6G4Ct864rQ7H3f9K0TP8elYcE7DoKVr0BVw-GEtW9enr47E4VRe8J79SXQg1XjTOBwcCIuU8nXT23WFYb2C4liJwriad9uXCDYxCoDe3l3GQnW8U1RJZtJAmvJmcNhlN2RZpptzvd8vtwY2Ny5tN9AkkK79cSh9agd4thjm2kjPUbVh7s9zLip7f-uV32obKieQFh3iFnT3BtiQn4laQe5Wd-lwKRnU2CpVtaaD~2aS061z7DkUBtg__"
                                    alt="" class="w-[60vh] object-contain object-center">
                            </div>
                        </div>
                        <div class="w-full h-[70vh]">
                            <ul class="flex items-center gap-2">
                                <li>
                                    <a href="#features"
                                        class="tab-link text-[16px] font-medium font-['Inter'] px-4 py-1 text-gray-900 rounded-full hover:bg-gray-900 hover:text-white active transition-all duration-300">
                                        Features
                                    </a>
                                </li>
                                <li>
                                    <a href="#space"
                                        class="tab-link text-[16px] font-medium font-['Inter'] px-4 py-1 text-gray-900 border border-gray-900 rounded-full hover:bg-gray-900 hover:text-white transition-all duration-300">
                                        Space
                                    </a>
                                </li>
                                <li>
                                    <a href="#video"
                                        class="tab-link text-[16px] font-medium font-['Inter'] px-4 py-1 text-gray-900 border border-gray-900 rounded-full hover:bg-gray-900 hover:text-white transition-all duration-300">
                                        Video
                                    </a>
                                </li>
                                <li>
                                    <a href="#download"
                                        class="tab-link text-[16px] font-medium font-['Inter'] px-4 py-1 text-gray-900 border border-gray-900 rounded-full hover:bg-gray-900 hover:text-white transition-all duration-300">
                                        Download
                                    </a>
                                </li>
                            </ul>

                            <div class="content-tabs my-3">
                                <!-- Features Tab -->
                                <div id="features" class="tab-content active">
                                    <ul class="list-disc ml-5 mt-2 text-gray-700 font-[300] font-['Inter']">
                                        <li>Luxury, elegant and seamless design</li>
                                        <li>Revolutionary technology, ACTILIGHT, ridding both visible and invisible waste</li>
                                        <li>Hybrid Ecology System</li>
                                        <li>HEATED SEAT with temperature control</li>
                                        <li>PREMIST, a fine spray of mist making it difficult for dirt to adhere</li>
                                        <li>EWATER+ keeps toilet bowl and nozzle clean by preventing bacteria with sanitizing effect</li>
                                        <li>Auto powerful DEODORIZER activates after every usage</li>
                                        <li>Auto Soft light function usable for night time usage</li>
                                        <li>Adjustable WARM AIR DRYING</li>
                                        <li>Automatically cleans the wand</li>
                                        <li>AIR-IN WONDERWAVE cleansing provides comfort and eco-friendliness</li>
                                    </ul>
                                </div>

                                <!-- Space Tab -->
                                <div id="space" class="tab-content hidden">
                                    <ul class="mt-2 text-gray-700 font-[300] font-['Inter']">
                                        <li class="flex items-start space-x-4">
                                            <strong class="w-[130px] font-[600]">
                                                Flush system
                                            </strong>
                                            <p>
                                                TORNADO FLUSH
                                            </p>
                                        </li>
                                         <li class="flex items-start space-x-4">
                                            <strong class="w-[130px] font-[600]">
                                                Water Use  
                                            </strong>
                                            <p>
                                                 3.8L / 3L
                                            </p>
                                        </li>
                                        <li class="flex items-start space-x-4">
                                            <strong class="w-[130px] font-[600]">
                                                Rough-in  
                                            </strong>
                                            <p>
                                                305 mm
                                            </p>
                                        </li>
                                        <li class="flex items-start space-x-4">
                                            <strong class="w-[130px] font-[600]">
                                                Bowl Shape    
                                            </strong>
                                            <p>
                                                Elongated
                                            </p>
                                        </li>
                                        <li class="flex items-start space-x-4">
                                            <strong class="w-[130px] font-[600]">
                                                Water Pressure  
                                            </strong>
                                            <p>
                                                0.05MPa~0.75MPa
                                            </p>
                                        </li>
                                        <li class="flex items-start space-x-4">
                                            <strong class="w-[130px] font-[600]">
                                                Power Rating 
                                            </strong>
                                            <p>
                                                220~240V, 50/60Hz, 835~845W
                                            </p>
                                        </li>
                                        <li class="flex items-start space-x-4">
                                            <strong class="w-[130px] font-[600]">
                                                Length of Power  
                                            </strong>
                                            <p>
                                                Cord1.2 m
                                            </p>
                                        </li>
                                        <li class="flex items-start space-x-4">
                                            <strong class="w-[130px] font-[600]">
                                                Material  
                                            </strong>
                                            <p>
                                                Bowl -Vitreous China                                   
                                                Seat & Cover -Plastic                                   
                                                Remote Controller -Aluminium
                                            </p>
                                        </li>
                                        <li class="flex items-start space-x-4">
                                            <strong class="w-[130px] font-[600]">
                                                Size  
                                            </strong>
                                            <p>
                                                468Wx800Dx565H mm
                                            </p>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Video Tab -->
                                <div id="video" class="tab-content hidden">
                                    <div class="mt-3">
                                        <iframe width="360" height="215" src="https://www.youtube.com/embed/NmiP-3grdfE?si=Yx82cvETYyGxWp2C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <!-- Download Tab -->
                                <div id="download" class="tab-content hidden">
                                    <ul class="mt-3 space-y-3">
                                        <li>
                                            <a 
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-7">
                                                <span class="relative
                                                    before:content-['']
                                                    before:absolute
                                                    before:left-0
                                                    before:bottom-0
                                                    before:w-0
                                                    before:h-[2px]
                                                    before:bg-gray-600
                                                    before:transition-all
                                                    before:duration-300
                                                    before:ease-in-out
                                                    hover:before:w-full
                                                ">
                                                    2D Drawings
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a 
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-7">
                                                <span class="relative
                                                    before:content-['']
                                                    before:absolute
                                                    before:left-0
                                                    before:bottom-0
                                                    before:w-0
                                                    before:h-[2px]
                                                    before:bg-gray-600
                                                    before:transition-all
                                                    before:duration-300
                                                    before:ease-in-out
                                                    hover:before:w-full
                                                ">
                                                   Image
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a 
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-7">
                                                <span class="relative
                                                    before:content-['']
                                                    before:absolute
                                                    before:left-0
                                                    before:bottom-0
                                                    before:w-0
                                                    before:h-[2px]
                                                    before:bg-gray-600
                                                    before:transition-all
                                                    before:duration-300
                                                    before:ease-in-out
                                                    hover:before:w-full
                                                ">
                                                    Specification Sheet
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a 
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-7">
                                                <span class="relative
                                                    before:content-['']
                                                    before:absolute
                                                    before:left-0
                                                    before:bottom-0
                                                    before:w-0
                                                    before:h-[2px]
                                                    before:bg-gray-600
                                                    before:transition-all
                                                    before:duration-300
                                                    before:ease-in-out
                                                    hover:before:w-full
                                                ">
                                                    Installation Manual CS901KVT
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a 
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-7">
                                                <span class="relative
                                                    before:content-['']
                                                    before:absolute
                                                    before:left-0
                                                    before:bottom-0
                                                    before:w-0
                                                    before:h-[2px]
                                                    before:bg-gray-600
                                                    before:transition-all
                                                    before:duration-300
                                                    before:ease-in-out
                                                    hover:before:w-full
                                                ">
                                                    Instruction Manual CS901KVT
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a 
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-7">
                                                <span class="relative
                                                    before:content-['']
                                                    before:absolute
                                                    before:left-0
                                                    before:bottom-0
                                                    before:w-0
                                                    before:h-[2px]
                                                    before:bg-gray-600
                                                    before:transition-all
                                                    before:duration-300
                                                    before:ease-in-out
                                                    hover:before:w-full
                                                ">
                                                    3D Drawings
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <h1 class="text-xl font-bold">
                                    Technologies
                                </h1>
                                <div class="mt-5 w-[500px]">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                        <img src="https://placehold.co/100x100" alt="" class="w-12 h-12 rounded-full">
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-5 mt-5">
                                <div>
                                    <h1 class="text-xl font-bold">
                                        Care & Maintenance
                                    </h1>
                                    <ul>
                                        <li>
                                            <a href="" class="text-[16px] text-red-500 font-medium link">
                                                Daily Cleaning Video
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="text-[16px] text-red-500 font-medium link">
                                                Deep Cleaning Video
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-span-2">
                                    <h1 class="text-xl font-bold">
                                        Awards
                                    </h1>
                                    <div class="flex flex-wrap w-[440px] gap-1">
                                        <img src="{{asset('images/gooddesign.svg')}}" alt="" class="w-32 object-cover object-center">
                                        <img src="{{asset('images/reddot.svg')}}" alt="" class="w-24 object-cover object-center">
                                        <img src="{{asset('images/design.svg')}}" alt="" class="w-32 object-cover object-center">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 font-['Inter'] ">
                                <div class="flex items-center gap-2">
                                    <h1 class="text-xl font-bold">
                                    Available in 
                                </h1>
                                <a href="" class="text-[16px] text-gray-200 font-medium px-4 py-2 rounded-full bg-gray-900">
                                    Showroom
                                </a>
                                </div>
                            </div>
                            <p class="text-gray-500 text-sm mt-2">
                                For the product import regulations and availability information, please contact our distributor(s) / dealer(s) in your country.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="absolute inset-x-0 bottom-0 bg-black py-1">
                <p class="text-white text-[12px] text-center"> © Copyright 2024 SUNHOUR GROUP, All Rights Reserved</p>
            </footer>
        </div>
    </div>
@endsection
<style>
    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }
    .tab-link{
        border: 1px solid #000;
    }

    .tab-link.active {
        background-color: #000;
        color: #fff;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content');

        tabLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent default anchor behavior

                // Remove 'active' class from all tab links
                tabLinks.forEach(tab => {
                    tab.classList.remove('active');
                });

                // Add 'active' class to the clicked tab link
                link.classList.add('active');

                // Remove 'active' class from all tab contents
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    content.classList.add('hidden');
                });

                // Get the target tab ID from the href
                const targetId = link.getAttribute('href').substring(1); // Remove the '#'
                const targetContent = document.getElementById(targetId);

                // Show the target tab content
                targetContent.classList.remove('hidden');
                targetContent.classList.add('active');
            });
        });
    });
</script>