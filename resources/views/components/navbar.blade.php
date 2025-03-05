<div class="fixed top-[12%] left-0 z-[100] w-fit h-full">
    <div class="bg-black/70 px-[3em] rounded-sm py-[10rem] {{ Route::is('partnerships.index') || Route::is('brands-client.model-details') || Route::is('contact.index') ? 'bg-black/100' : '' }} overflow-hidden">
        <ul class="flex flex-col justify-center items-start space-y-6 text-nowrap">
            <li>
                <a href="{{ route('home') }}" class="group">
                    <span 
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:left-[100%] before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:before:w-[200%] hover:before:opacity-100
                    {{ Route::is('home') ? 'before:w-[200%] before:opacity-100' : '' }}
                    ">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('about-us') }}" class="flex flex-col items-center group {{ Route::is('about-us') ? 'font-bold' : '' }} ">
                    <span 
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:left-[100%] before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:before:w-[200%] hover:before:opacity-100
                    {{ Route::is('about-us') ? 'before:w-[200%] before:opacity-100' : '' }}"
                    >About Us</span>
                </a>
            </li>
            <li>
                <a href="{{ route('brands.all') }}" class="flex flex-col items-center group {{ Route::is('brands.all') || Route::is('brands-client.show') || Route::is('brands-client.model') ? 'font-bold' : '' }}">
                    <span 
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:left-[100%] before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:before:w-[200%] hover:before:opacity-100
                    {{ Route::is('brands.all') || Route::is('brands-client.show') || Route::is('brands-client.model') ? 'before:w-[200%] before:opacity-100' : '' }}"
                    >Brands</span>
                </a>
            </li>
            <li>
               <a href="{{ route('partnerships.index') }}" class="flex flex-col items-center group {{ Route::is('partnerships.index') ? 'font-bold' : '' }}">
                    <span 
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:left-[100%] before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:before:w-[200%] hover:before:opacity-100
                    {{ Route::is('partnerships.index') ? 'before:w-[200%] before:opacity-100' : '' }}"
                    >Partnerships</span>
                </a>
            </li>
            <li>
                <a href="{{ route('career.index') }}" class="flex flex-col items-center group {{ Route::is('career.index') ? 'font-bold' : '' }}">
                    <span 
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:left-[100%] before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:before:w-[200%] hover:before:opacity-100
                    {{ Route::is('career.index') ? 'before:w-[200%] before:opacity-100' : '' }}"
                    >Careers</span>
                </a>
            </li>
            <li>
                <a href="{{ route('contact.index') }}" class="flex flex-col items-center group {{ Route::is('contact.index') ? 'font-bold' : '' }}">
                    <span 
                    class="relative
                    text-white text-[18px] before:content-[''] before:absolute before:left-[100%] before:bottom-2 before:w-0 before:h-[2px] before:bg-white before:transition-all before:duration-300 before:ease-in-out
                    group-hover:before:w-[100%] hover:before:opacity-100
                    {{ Route::is('contact.index') ? 'before:w-[100%] before:opacity-100' : '' }}"
                    >Contact Us</span>
                </a>
            </li>
            <li class="flex flex-col justify-center items-start gap-2">
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
