@extends('layouts.guest')

@section('content')
    <div class="m-0 p-0 overflow-hidden">
        <div class="relative h-screen w-full overflow-hidden">
            <div class="absolute inset-0 bg-white overflow-hidden"></div>
            {{-- Navbar --}}
            @component('components.navbar')
            @endcomponent
            {{-- content --}}
            <div class="relative z-10 w-full max-w-[130vh] 2xl:max-w-[150vh] ms-auto px-3 lg:px-10 font-['Inter'] transition-all duration-300">
                @component('components.header-light')
                @endcomponent
                <div class="w-full h-screen md:h-[90vh] me-auto overflow-y-scroll overflow-x-hidden scroll-smooth max-sm:pb-[10rem] transition-all duration-300">
                    <div class="grid grid-cols-1 lg:grid-cols-2 justify-center items-center gap-7 rounded-sm mt-5 md:mt-[8rem] xl:mt-[2rem]">
                        <div class="w-full h-full 2xl:h-[70vh]">
                            <div>
                                <h1 class="text-2xl font-bold">{{ $models->name }}</h1>
                                <div class="inline-flex items-center">
                                    <span class="h-[3px] bg-black w-[50px] mt-[1em]"></span>
                                    <h1 class="text-3xl text-[#C41230] font-bold">NEOREST NX II</h1>
                                </div>

                                <img src="{{ $models->link }}"
                                    alt="" class="w-full md:w-[50vh] 2xl:w-[60vh] object-contain object-center">
                            </div>
                        </div>
                        <div class="w-full h-full 2xl:h-[70vh]">
                            <ul class="max-sm:h-[5vh] max-sm:overflow-x-scroll  px-2 md:px-0  flex justify-start items-center gap-2">
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
                                    <ul class="text-[12px] 2xl:text-[16px] list-disc ml-5 mt-2 text-gray-700 font-[300] font-['Inter']">
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
                                    <ul class="mt-2 text-[12px] 2xl:text-[16px] text-gray-700 font-[300] font-['Inter']">
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
                                            <p class="whitespace-pre-line">Bowl -Vitreous China Seat & Cover -Plastic
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
                                        <iframe class="lg:mx-auto w-full h-full md:w-[600px] md:h-[300px] lg:w-[200px] lg:h-[115px] 2xl:w-[360px] 2xl:h-[215px]" src="https://www.youtube.com/embed/NmiP-3grdfE?si=Yx82cvETYyGxWp2C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <!-- Download Tab -->
                                <div id="download" class="tab-content hidden">
                                    <ul class="mt-3 space-y-3">
                                        <li>
                                            <a
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-5 2xl:w-7">
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
                                                    text-[12px] 2xl:text-[16px]
                                                ">
                                                    2D Drawings
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-5 2xl:w-7">
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
                                                    text-[12px] 2xl:text-[16px]
                                                ">
                                                   Image
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-5 2xl:w-7">
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
                                                    text-[12px] 2xl:text-[16px]
                                                ">
                                                    Specification Sheet
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-5 2xl:w-7">
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
                                                    text-[12px] 2xl:text-[16px]
                                                ">
                                                    Installation Manual CS901KVT
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-5 2xl:w-7">
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
                                                    text-[12px] 2xl:text-[16px]
                                                ">
                                                    Instruction Manual CS901KVT
                                                </span>
                                            </a>
                                        </li>
                                         <li>
                                            <a
                                            class="flex items-center gap-5"
                                            href="" download="">
                                                <img src="{{asset('images/pdf.png')}}" alt="pdf" class="w-5 2xl:w-7">
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
                                                    text-[12px] 2xl:text-[16px]
                                                ">
                                                    3D Drawings
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <h1 class="font-bold text-[16px] 2xl:text-[20px]">
                                    Technologies
                                </h1>
                                <div class="mt-5 w-full md:w-[500px]">
                                    <div class="flex flex-wrap items-center gap-2">
                                        @foreach($functions as $function)
                                            @if($function->model_id === $models->uuid)
                                                <a href="">
                                                    <img src="{{$function->icon}}" alt="" class="w-9 2xl:w-12 h-9 2xl:h-12 rounded-full">
                                                </a>
                                            @else
                                                <h1 class="text-md text-[#fff]">Not Available!</h1>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-5 mt-5">
                                <div>
                                    <h1 class="text-[14px] 2xl:text-[20px] font-bold">
                                        Care & Maintenance
                                    </h1>
                                    <ul>
                                        <li>
                                            <a href="{{$daily->video}}" class="text-[12px] 2xltext-[16px] text-red-500 font-medium link">
                                                Daily Cleaning Video
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$deep->video}}" class="text-[12px] 2xltext-[16px] text-red-500 font-medium link">
                                                Deep Cleaning Video
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-span-2">
                                    <h1 class="text-[14px] 2xl:text-[20px] font-bold">
                                        Awards
                                    </h1>
                                    <div class="flex flex-wrap w-full md:w-[440px] gap-1">
                                        <img src="{{asset('images/gooddesign.svg')}}" alt="" class="w-24 2xl:w-32 object-cover object-center">
                                        <img src="{{asset('images/reddot.svg')}}" alt="" class="w-20 2xl:w-24 object-cover object-center">
                                        <img src="{{asset('images/design.svg')}}" alt="" class="w-24 2xl:w-32 object-cover object-center">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 font-['Inter'] ">
                                <div class="flex items-center gap-2">
                                    <h1 class="text-[14px] 2xl:text-[20px] font-bold">
                                    Available in
                                </h1>
                                <a href="" class="text-[12px] 2xl:text-[16px] text-gray-200 font-medium px-4 py-2 rounded-full bg-gray-900">
                                    Showroom
                                </a>
                                </div>
                            </div>
                            <p class="text-gray-500 text-[12px] 2xl:text-[16px] mt-2">
                                For the product import regulations and availability information, please contact our distributor(s) / dealer(s) in your country.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="absolute inset-x-0 bottom-0 bg-black py-1 z-[50]">
                <p class="text-white text-[12px] text-center"> © Copyright 2024 SUNHOUR GROUP, All Rights Reserved</p>
            </footer>
        </div>
    </div>
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
@endsection
