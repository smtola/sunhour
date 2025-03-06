@extends('layouts.guest')

@section('content')
    <div class="m-0 p-0 overflow-hidden">
        <div class="relative h-screen w-full">
            <div class="absolute inset-0 bg-white"></div>
            {{-- Navbar --}}
            @component('components.navbar')
            @endcomponent
            {{-- content --}}
            <div class="relative z-10 w-full max-w-[130vh] 2xl:max-w-[150vh] ms-auto px-3 lg:px-10 font-['Inter'] transition-all duration-300">
                @component('components.header-light')
                @endcomponent
                <div class="h-[90vh] max-sm:overflow-y-auto max-sm:pb-[6rem] w-full me-auto mt-[2rem] md:mt-[8rem] xl:mt-[2rem] 2xl:mt-[5rem]">
                    <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-7 rounded-sm">
                        <div class="w-full lg:w-[450px] h-full">
                            <h1 class="text-[32px] md:text-[32px] md:text-[60px] font-bold whiteleading-[32px] md:space-pre-line leading-[32px] md:leading-[60px]">
                                Contact Us
                            </h1>
                            <p class="text-gray-700 text-sm mt-2 whitespace-pre-line">
                                Honest customer feedback is crucial to help us give you the best possible shopping experience. So feel free to get in touch.
                            </p>
                            <form action="" class="flex flex-col gap-2 my-5">
                                <label for="name" class="text-black text-[14px]">
                                    <input type="text" name="name" id="name" class="w-full text-black bg-gray-200 text-[14px] p-2"
                                    placeholder="Enter Full Name"
                                    >
                                </label>
                                <div class="flex gap-2">
                                    <label for="email" class="text-black text-[14px] w-full">
                                     <input type="email" name="email" id="email" class="w-full text-black bg-gray-200 text-[14px] p-2"
                                        placeholder="Enter Email"
                                        >
                                    </label>
                                    <label for="subject" class="text-black text-[14px] w-full">
                                     <input type="subject" name="subject" id="subject" class="w-full text-black bg-gray-200 text-[14px] p-2"
                                        placeholder="Enter Subject"
                                            >
                                    </label>
                                </div>
                                <textarea name="message" id="message" class="w-full text-black bg-gray-200 text-[14px] p-2"
                                placeholder="Enter Message"
                                ></textarea>
                                <button type="submit" class="text-[14px] w-[150px] text-gray-100 bg-gray-900 p-2">Submit</button>
                            </form>
                            <p class="text-black text-[14px] font-[300] font-['Inter']">
                                #427,Monivong Boulevard, Phnom Penh, Cambodia.
                            </p>
                            <p class="text-black text-[14px] font-[300] font-['Inter'] whitespace-pre-line mb-2">
                                023 218 508 | 023 218 898 | 012 818 189
                                (English & Chinese Speaking - Project Sale)
                            </p>
                            <p class="text-black text-[14px] font-[300] font-['Inter'] mb-2">
                                info@sunhour.com.kh
                            </p>
                            <p class="text-black text-[14px] font-[300] font-['Inter']">
                                Monday - Sunday 8am - 5:30pm
                            </p>
                        </div>
                        <div class="w-full max-w-[400px]">
                            <div>
                                <iframe class="w-full h-full lg:w-[460px] lg:h-[270px] 2xl:w-[600px] 2xl:h-[350px]" width="600" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1504.8398422006314!2d104.91904409277545!3d11.561474051377417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513e968a1bb9%3A0x90fd8a12a4c83adb!2zU1VOSE9VUiBHUk9VUCBDTy4sIExURCDpobrlkozpm4blm6LmnInpmZDlhazlj7g!5e1!3m2!1sen!2skh!4v1741156787319!5m2!1sen!2skh"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <h1 class="text-[20px] font-bold whitespace-pre-line leading-[20px]">
                                Get in touch with us!
                            </h1>
                            <div class="flex gap-2">
                                <img src="https://s3-alpha-sig.figma.com/img/538f/ab1d/e19d238277699949278b1acc857fce4e?Expires=1742169600&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=clg0on8dZMVXhp6LjYkjYwhSxzei6VgHJpJZBoQJnurwsPz2pKX03OCVOZOobpAwWTCIIR9VxZVvor~jQ~AjUUnsgAZlIcuuUlNlAMewdfal~uWKjjIRVh-MPPQkAFvv6XpbLCV4yiPS~sJK9K5O2FdTGPjIYBnFEYSpq~oNDk0RdKfJhP9tYr8unHzi9Nn9eT4sv50B2PXcDsDmLgmJbLaTBDPW1b6rEgJltncNvA1U2F1ZRjvLJhXLaOsU7Kt8epjPhmHKNbCZ6fUXDTrwwjr6qKWTJXvwU~o~dTbK4GTj15DGQ2QsgsYDhKwFwNpaZlT0kXdP0-U8XfAGxZxpZA__" 
                                alt="Telegram" class="w-[140px] h-[140px]">
                                <img src="https://s3-alpha-sig.figma.com/img/66cf/900e/61fad67e1f9fa6426dd45298fb99ceec?Expires=1742169600&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=Aj-QKNWrLQi~3OvUGR80MPPowkH56fTkDC~KrWlw5U1x1Sp4wQzRIw1w9I7GZAYCYw9-vDxETOhD0IBwnBSLRh-Jfb7jYSaByJtAvcTYkbx0dnSc78HJPTEr6lfgni42KI-LnDcf1YRyZWuac7KPtIC23A3jBLQmHS5YRbKo-tCsXlcTTNc5TQG1mTVq-3Ny5YcJaayWkogH01Tnd-Dmp7dfQwsuK9mcypIZgn14I5TFg2ED7mMHWAhbSdReGiiOn6HXv8GVq~Qq6SerDmF5Ex0mZ86u8XtzEJLor7DfaVtPl5qVCeV8ATEF-tYUMLeQ-0zCx6V9S4jEzBPi07yZKA__" 
                                alt="Telegram" class="w-[140px] h-[140px]">
                                {{-- <span class="flex flex-col gap-2">
                                    <p>
                                        Subscribe our community get 25% off your first three order.
                                    </p>
                                    <label for="email" class="text-black text-[12px] w-full">
                                        <input type="email" name="email" id="email" class="w-full text-black bg-gray-200 text-[12px] p-2"
                                        placeholder="Enter Email"
                                        >
                                    </label>
                                </span> --}}
                            </div>
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
