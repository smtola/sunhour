<div class="hidden md:block fixed w-full top-[8%] right-0 left-0 xl:top-[10%] xl:left-0 z-[100] xl:w-fit xl:h-full">
    <div class="bg-black/70 px-[3em] rounded-sm py-4 py-15inch xl:py-[5rem] 2xl:py-[9rem] {{ Route::is('partnerships.index') || Route::is('brands-client.model-details') || Route::is('contact.index') || Route::is('brands-client.model-details') ? 'bg-[#000]' : '' }} overflow-hidden">
        <ul class="flex flex-row xl:flex-col justify-center items-start gap-4 space-y-3 2xl:space-y-6 text-nowrap">
            <li>
                <a href="{{ route('home') }}" class="group">
                    <span
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-1 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:w-full xl:group-hover:before:w-[200%] hover:before:opacity-100
                    {{ Route::is('home') ? 'before:w-full xl:before:w-[200%] before:opacity-100' : '' }}
                    ">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('about-us') }}" class="flex flex-col items-center group {{ Route::is('about-us') ? 'font-bold' : '' }} ">
                    <span
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:w-full xl:group-hover:before:w-[200%] hover:before:opacity-100
                    {{ Route::is('about-us') ? 'before:w-full xl:before:w-[200%] before:opacity-100' : '' }}"
                    >About Us</span>
                </a>
            </li>
            <li>
                <a href="{{ route('brands.all') }}" class="flex flex-col items-center group {{ Route::is('brands.all') || Route::is('brands-client.show') || Route::is('brands-client.model') || Route::is('brands-client.model-details' ? 'font-bold' : '') }}">
                    <span
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:w-full xl:group-hover:before:w-[200%] hover:before:opacity-100
                    {{ Route::is('brands.all') || Route::is('brands-client.show') || Route::is('brands-client.model') || Route::is('brands-client.model-details') ? 'before:w-full xl:before:w-[200%] before:opacity-100' : '' }}"
                    >Brands</span>
                </a>
            </li>
            <li>
               <a href="{{ route('partnerships.index') }}" class="flex flex-col items-center group {{ Route::is('partnerships.index') ? 'font-bold' : '' }}">
                    <span
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:w-full xl:group-hover:before:w-[200%] hover:before:opacity-100
                    {{ Route::is('partnerships.index') ? 'before:w-full xl:before:w-[200%] before:opacity-100' : '' }}"
                    >Partnerships</span>
                </a>
            </li>
            <li>
                <a href="{{ route('career.index') }}" class="flex flex-col items-center group {{ Route::is('career.index') ? 'font-bold' : '' }}">
                    <span
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:w-full xl:group-hover:before:w-[200%] hover:before:opacity-100
                    {{ Route::is('career.index') ? 'before:w-full xl:before:w-[200%] before:opacity-100' : '' }}"
                    >Careers</span>
                </a>
            </li>
            <li>
                <a href="{{ route('contact.index') }}" class="flex flex-col items-center group {{ Route::is('contact.index') ? 'font-bold' : '' }}">
                    <span
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:w-full xl:group-hover:before:w-[100%] hover:before:opacity-100
                    {{ Route::is('contact.index') ? 'before:w-[100%] before:opacity-100' : '' }}"
                    >Contact Us</span>
                </a>
            </li>
            <li class="flex flex-row xl:flex-col justify-center items-start gap-2">
                <a href="#"
                    class="inline-block p-[5px] rounded-full border-2 border-white text-white hover:bg-white hover:text-black transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" width="16" height="16"
                        stroke-width="1.25">
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-block p-[5px] rounded-full border-2 border-white text-white hover:bg-white hover:text-black transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" width="16" height="16"
                        stroke-width="1.25">
                        <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M16.5 7.5l0 .01"></path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>
<nav  x-data="{ open: false }" class="md:hidden block ">
    <button @click="open = !open"
     class="fixed left-0 top-[18%] left-0 z-[100] bg-black/70 text-white px-[1em] rounded-r-full py-3 {{ Route::is('partnerships.index') || Route::is('brands-client.model-details') || Route::is('contact.index') ? 'bg-black/100' : '' }} overflow-hidden"
    >
        <svg x-bind:class="open ? 'block' : 'hidden'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="20" height="20" stroke-width="1.25">
            <path d="M4 6h16"></path>
            <path d="M7 12h13"></path>
            <path d="M10 18h10"></path>
        </svg>
        <svg x-bind:class="open ? 'hidden' : 'block'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="20" height="20" stroke-width="1.25">
            <path d="M4 6l16 0"></path>
            <path d="M4 12l16 0"></path>
            <path d="M4 18l16 0"></path>
        </svg>
    </button>
    {{-- mobile navbar --}}
    <div x-bind:class="open ? 'translate-x-0' : '-translate-x-full'" class="transition-all duration-300 fixed left-0 top-[24%] left-0 z-[100] w-fit h-full">
        <div  class="ease-in-out bg-black px-[3em] rounded-sm py-4 py-[5rem] {{ Route::is('partnerships.index') || Route::is('brands-client.model-details') || Route::is('contact.index') ? 'bg-black/100' : '' }} overflow-hidden">
            <ul class="flex flex-col justify-center items-start space-y-6 text-nowrap">
                <li>
                    <a href="{{ route('home') }}" class="group">
                        <span
                        class="relative
                        text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-1 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                        group-hover:w-full xl:group-hover:before:w-[200%] hover:before:opacity-100
                        {{ Route::is('home') ? 'before:w-full xl:before:w-[200%] before:opacity-100' : '' }}
                        ">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}" class="flex flex-col items-center group {{ Route::is('about-us') ? 'font-bold' : '' }} ">
                        <span
                        class="relative
                        text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                        group-hover:w-full xl:group-hover:before:w-[200%] hover:before:opacity-100
                        {{ Route::is('about-us') ? 'before:w-full xl:before:w-[200%] before:opacity-100' : '' }}"
                        >About Us</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('brands.all') }}" class="flex flex-col items-center group {{ Route::is('brands.all') || Route::is('brands-client.show') || Route::is('brands-client.model') ? 'font-bold' : '' }}">
                        <span
                        class="relative
                        text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                        group-hover:w-full xl:group-hover:before:w-[200%] hover:before:opacity-100
                        {{ Route::is('brands.all') || Route::is('brands-client.show') || Route::is('brands-client.model') ? 'before:w-full xl:before:w-[200%] before:opacity-100' : '' }}"
                        >Brands</span>
                    </a>
                </li>
                <li>
                <a href="{{ route('partnerships.index') }}" class="flex flex-col items-center group {{ Route::is('partnerships.index') ? 'font-bold' : '' }}">
                        <span
                        class="relative
                        text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                        group-hover:w-full xl:group-hover:before:w-[200%] hover:before:opacity-100
                        {{ Route::is('partnerships.index') ? 'before:w-full xl:before:w-[200%] before:opacity-100' : '' }}"
                        >Partnerships</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('career.index') }}" class="flex flex-col items-center group {{ Route::is('career.index') ? 'font-bold' : '' }}">
                        <span
                        class="relative
                        text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                        group-hover:w-full xl:group-hover:before:w-[200%] hover:before:opacity-100
                        {{ Route::is('career.index') ? 'before:w-full xl:before:w-[200%] before:opacity-100' : '' }}"
                        >Careers</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact.index') }}" class="flex flex-col items-center group {{ Route::is('contact.index') ? 'font-bold' : '' }}">
                        <span
                        class="relative
                        text-white text-[18px] before:content-[''] before:absolute before:bottom-0 xl:before:left-[100%] xl:before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                        group-hover:w-full xl:group-hover:before:w-[100%] hover:before:opacity-100
                        {{ Route::is('contact.index') ? 'before:w-[100%] before:opacity-100' : '' }}"
                        >Contact Us</span>
                    </a>
                </li>
                <li class="flex flex-row xl:flex-col justify-center items-start gap-2">
                    <a href="#"
                        class="inline-block p-[5px] rounded-full border-2 border-white text-white hover:bg-white hover:text-black transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" width="16" height="16"
                            stroke-width="1.25">
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-block p-[5px] rounded-full border-2 border-white text-white hover:bg-white hover:text-black transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" width="16" height="16"
                            stroke-width="1.25">
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M16.5 7.5l0 .01"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
        @media only screen and (max-width: 1440px) and (min-width: 1440px) {
            .py-15inch{
                padding: 4rem 3em;
            }
        }
</style>
