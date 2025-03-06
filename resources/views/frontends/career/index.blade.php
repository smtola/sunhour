@extends('layouts.guest')

@section('content')
    <div class="m-0 p-0 overflow-hidden">
        <div class="relative h-screen w-full">
            <img src="https://s3-alpha-sig.figma.com/img/05a2/75cf/557d582697373c41e6d442a99230b38d?Expires=1742169600&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=EjOLcPVtYt6e5-4X4~aKA8p0k6i8edpC0XKjpvD48dWNmvx10oxbYoLNsICifCtkGm4xY5SSStmlmnw1g8YSsAB~bHO2iES9XF6NABXrKGWBkLswuhCAb3PdogrEpfNZZU7M2kOl6OohLp4HZzHMXG5NAplaU5-ZQFGvAc~DhEWO1~PfzqFuty5Y-gSc0aT6IkqO1HKJGehnoxMRVnhEwchw8WtrPxotD8f6zy0HmJbyedGsfZTv0DAVMCnQVetNgYHQsJ1LksoFFZgqT5cxYas5pE2Ccw6CQmkXEUz84no1cqMes4QoZPj8VSPiU0Kd9bqUWSPvYf1yHNumqOQrBA__" class="absolute top-0 left-0 w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-black/30"></div>
            {{-- Navbar --}}
            @component('components.navbar')
            @endcomponent
            {{-- content --}}
            <div class="relative z-10 w-full max-w-[120vh] 2xl:max-w-[150vh] ms-auto px-3 md:px-10 font-['Inter'] transition-all duration-300">
                @component('components.header-light')
                @endcomponent
                <div class="bg-gradient-to-r from-white/80 to-white/10 w-full xl:w-[90vh] mt-[8rem] md:mt-[18rem] lg:mt-[24rem] xl:mt-[7rem] me-auto 2xl:mt-[10rem] px-3 md:px-10 pb-10 pt-3">
                    <h1 class="text-[32px] md:text-[40px] 2xl:text-[60px] font-bold">Careers</h1>
                    <p class="text-[14px] md:text-[16px] 2xl:text-[20px] whitespace-pre-line">
                        We are always looking for talented people to join our team. We encourage you to submit an application any time, even if there are no current openings listed.

                        If we think you’re right for us, we’ll find you a place in our organisation.

                        If you’re interested, submit your CV with covering letter now. 

                        Please feel free to contact us by
                    </p>
                    <div class="w-fit flex items-center gap-2 bg-black p-2 rounded-full text-white pe-[2rem] mt-4">
                        <span class="bg-white rounded-full p-2 text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="16" height="16" stroke-width="1.25">
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                            <path d="M3 7l9 6l9 -6"></path>
                            </svg>
                        </span>
                        <span>info@sunhour.com.kh</span>
                    </div>
                </div>
            </div>
            <footer class="absolute inset-x-0 bottom-0 bg-white py-1">
                <p class="text-black text-[12px] text-center"> © Copyright 2024 SUNHOUR GROUP, All Rights Reserved</p>
            </footer>
        </div>
    </div>
@endsection
