@extends('layouts.guest')

@section('content')
    <div class="m-0 p-0 overflow-hidden">
        <div class="relative h-screen w-full">
            <div class="absolute inset-0 bg-white"></div>
            {{-- Navbar --}}
            @component('components.navbar')
            @endcomponent
            {{-- content --}}
            <div class="relative z-10 w-full max-w-[130vh] 2xl:max-w-[150vh] ms-auto px-3 md:px-10 font-['Inter'] transition-all duration-300">
                @component('components.header-light')
                @endcomponent
                <div class="h-[90vh] max-sm:overflow-y-auto max-sm:pb-[6rem] w-full me-auto md:mt-[14rem] lg:mt-[20rem] xl:mt-[5rem] 2xl:mt-[10rem]">
                    <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-7 rounded-sm">
                        <div class="w-full h-full">
                            <h1 class="text-[32px] md:text-[60px] font-bold whitespace-pre-line leading-[32px] md:leading-[60px]">
                                Want to Become
                                Our Partner?
                            </h1>
                            <p class="text-gray-700 text-sm mt-2 whitespace-pre-line">
                                Thanks for your interest in becoming a Partner with SUNHOUR GROUP.

                                If you’d like to be considered for future partnership opportunities, 

                                Please tell us a little bit about your business below. We’ll securely store your information and get in touch as soon as possible.
                            </p>
                        </div>
                        <div class="w-full max-w-[400px] bg-black h-full p-3 xl:p-10">
                            <form action="">
                                <div class="flex flex-col gap-2 md:gap-5">
                                    <input type="text" name="cname" id="cname" class="w-full text-white bg-[#444444] text-[14px] p-2"
                                    placeholder="Enter Company Name"
                                    >
                                    <input type="text" name="cweb" id="cweb" class="w-full text-white bg-[#444444] text-[14px] p-2"
                                    placeholder="Enter Company Website"
                                    >
                                    <input type="text" name="fullName" id="fullName" class="w-full text-white bg-[#444444] text-[14px] p-2"
                                    placeholder="Enter Full Name"
                                    >
                                    <div class="flex gap-2">
                                        <input type="text" name="title" id="title" class="w-full text-white bg-[#444444] text-[14px] p-2"
                                        placeholder="Enter Title"
                                        >
                                        <input type="text" name="phone" id="phone" class="w-full text-white bg-[#444444] text-[14px] p-2"
                                        placeholder="Enter Phone Number"
                                        >
                                    </div>
                                    <input type="email" name="email" id="email" class="w-full text-white bg-[#444444] text-[14px] p-2"
                                        placeholder="Enter Email"
                                    >
                                     <input type="text" name="country" id="country" class="w-full text-white bg-[#444444] text-[14px] p-2"
                                        placeholder="Enter Country"
                                    >
                                    <textarea name="message" id="message" class="w-full text-white bg-[#444444] text-[14px] p-2"
                                    placeholder="Enter Message"
                                    ></textarea>
                                    <button type="submit" class="text-[14px] w-[150px] text-gray-800 bg-gray-100 p-2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            <footer class="absolute inset-x-0 bottom-0 bg-black py-1 z-[50]">
                <p class="text-white text-[12px] text-center"> © Copyright 2024 SUNHOUR GROUP, All Rights Reserved</p>
            </footer>
        </div>
    </div>
@endsection
