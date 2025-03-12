@extends('layouts.app')
@section('content')
    <div class="w-full mx-auto">
        @component('components.navigation')
        @endcomponent

        <div class="mt-5">
            <div class="grid grid-cols-12">
                <div class="breadcrumbs text-sm col-span-4">
                    <ul>
                        <li>
                            <a href="{{ route('brands.index') }}" class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                                    stroke-width="1.25">
                                    <path d="M5 12l14 0"></path>
                                    <path path d="M5 12l4 4"></path>
                                    <path d="M5 12l4 -4"></path>
                                </svg>
                                <p class="uppercase font-bold">
                                    {{ $singleData->brands->name }}
                                </p>
                            </a>
                        </li>
                        <li>
                             <a href="{{ route('products.index', [$singleData->brands->uuid]) }}">
                                 {{ $singleData->name}}
                             </a>
                        </li>
                        <li>Add Models</li>
                    </ul>
                </div>
                <div class="col-span-8 flex items-center justify-end space-x-5">
                    <form action="" id="perPage">
                        <label for="perPage">
                            Showing
                            <select name="perPage" id="perPage" class="select select-sm select-bordered bg-blue-300/30">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                            </select>
                        </label>
                    </form>

                    <form action="" id="filter">
                        <div class="relative">
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex cursor-pointer items-center gap-2 pb-1 text-gray-900 transition bg-white rounded-lg px-4 py-2">
                                    <span class="transition">
                                        <svg class="group-open:fill-gray-900" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" width="22" height="22" stroke-width="1.25">
                                            <path
                                                d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium"> Filter </span>
                                </summary>

                                <div
                                    class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2">
                                    <div class="w-96 rounded-sm border border-gray-200 bg-white">
                                        <header class="flex items-center justify-between p-4">
                                            <span class="text-sm text-gray-700"> 0 Selected </span>

                                            <button type="button"
                                                class="text-sm text-gray-900 underline underline-offset-4">
                                                Reset
                                            </button>
                                        </header>

                                        <ul class="space-y-1 border-t border-gray-200 p-4">
                                            <li>
                                                <label for="FilterInStock" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterInStock"
                                                        class="size-5 rounded-sm border-gray-300" />

                                                    <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterPreOrder"
                                                        class="size-5 rounded-sm border-gray-300" />

                                                    <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                                                    <input type="checkbox" id="FilterOutOfStock"
                                                        class="size-5 rounded-sm border-gray-300" />

                                                    <span class="text-sm font-medium text-gray-700"> Out of Stock (10+)
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </details>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 space-x-5 mt-5">
        <div class=" bg-white rounded-lg col-span-9 h-fit">
            <table class="table ">
                <thead>
                    <tr class="text-gray-500 border-gray-200">
                        <th>Model</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                @if ($loading)
                    <tr>
                        <td>
                            <div class="inline-flex items-end gap-2">
                                <p>Data don't exist in storage.</p>
                                <span class="loading loading-dots loading-xs text-gray-500"></span>
                            </div>
                        </td>
                    </tr>
                @else
                    @foreach ($models as $item)
                        @if($singleData->uuid ===  $item->product_id)
                            <tbody>
                                <tr class="hover:bg-gray-100 border-gray-200 border-b">
                                <td>
                                    <div class="inline-flex items-center gap-2 float-start">
                                        <img src="{{$item->link}}" alt="" class="w-10 h-10 rounded-full">
                                        <p>{{$item->name}}</p>
                                    </div>
                                </td>
                                <td class="inline-flex items-center gap-2 float-end">
                                    <div class="dropdown dropdown-hover dropdown-end">
                                        <button model-tip="Go to Details" tabindex="0" role="button"
                                                class="bg-info/10 px-2 py-1 rounded-md tooltip tooltip-top tooltip-info link link-info">

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                 width="24" height="24" stroke-width="1.25">
                                                <path
                                                    d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                                                </path>
                                                <path
                                                    d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z">
                                                </path>
                                                <path d="M9 12l.01 0"></path>
                                                <path d="M13 12l2 0"></path>
                                                <path d="M9 16l.01 0"></path>
                                                <path d="M13 16l2 0"></path>
                                            </svg>
                                        </button>
                                        <ul tabindex="0"
                                            class="dropdown-content menu bg-white rounded-box z-[2] w-64 shadow p-0 space-y-1">
                                            <li>
                                                <a href="{{ route('functions.index', [$singleData->brand_id, $singleData->uuid, $item->uuid]) }}"
                                                   class="join-item px-4 py-2 inline-flex items-center gap-2 rounded-sm  border-s-[3px] border-blue-500 bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                         fill="none" stroke="currentColor" stroke-linecap="round"
                                                         stroke-linejoin="round" width="24" height="24"
                                                         stroke-width="1.25">
                                                        <path d="M3 12l3 3l3 -3l-3 -3z"></path>
                                                        <path d="M15 12l3 3l3 -3l-3 -3z"></path>
                                                        <path d="M9 6l3 3l3 -3l-3 -3z"></path>
                                                        <path d="M9 18l3 3l3 -3l-3 -3z"></path>
                                                    </svg>
                                                    <p>Function Lists</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('daily-cleans.index', [$singleData->brand_id, $singleData->uuid, $item->uuid]) }}"
                                                   class="join-item px-4 py-2 inline-flex items-center gap-2 rounded-sm  border-s-[3px] border-blue-500 bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="none" stroke="currentColor" stroke-linecap="round"
                                                             stroke-linejoin="round" width="24" height="24"
                                                             stroke-width="1.25">
                                                            <path
                                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                                            </path>
                                                            <path d="M16 3v4"></path>
                                                            <path d="M8 3v4"></path>
                                                            <path d="M4 11h16"></path>
                                                            <path d="M8 14v4"></path>
                                                            <path d="M12 14v4"></path>
                                                            <path d="M16 14v4"></path>
                                                        </svg>
                                                    </span>
                                                    <p>Daily Cleaning Lists</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('deep-cleans.index', [$singleData->brand_id, $singleData->uuid, $item->uuid]) }}"
                                                   class="join-item px-4 py-2 inline-flex items-center gap-2 rounded-sm  border-s-[3px] border-blue-500 bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="none" stroke="currentColor" stroke-linecap="round"
                                                             stroke-linejoin="round" width="24" height="24"
                                                             stroke-width="1.25">
                                                            <path d="M4 6h16"></path>
                                                            <path d="M7 12h13"></path>
                                                            <path d="M10 18h10"></path>
                                                        </svg>
                                                    </span>
                                                    <p>Deep Cleaning Lists</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('show-rooms.index', [$singleData->brand_id, $singleData->uuid, $item->uuid]) }}"
                                                   class="join-item px-4 py-2 inline-flex items-center  gap-2 rounded-sm  border-s-[3px] border-blue-500 bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="none" stroke="currentColor" stroke-linecap="round"
                                                             stroke-linejoin="round" width="24" height="24"
                                                             stroke-width="1.25">
                                                            <path d="M14 12v.01"></path>
                                                            <path d="M3 21h18"></path>
                                                            <path d="M6 21v-16a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v16"></path>
                                                        </svg>
                                                    </span>
                                                    <p>Show Room Lists</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('features.index', [$singleData->brand_id, $singleData->uuid, $item->uuid]) }}"
                                                   class="join-item px-4 py-2 inline-flex items-center gap-2 rounded-sm  border-s-[3px] border-blue-500 bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                    <path d="M19 18v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1"></path>
                                                    <path d="M3 14h3m4.5 0h3m4.5 0h3"></path>
                                                    <path d="M5 10v-5a2 2 0 0 1 2 -2h7l5 5v2"></path>
                                                    </svg>
                                                </span>
                                                    <p>Features</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('spaces.index', [$singleData->brand_id, $singleData->uuid, $item->uuid]) }}"
                                                   class="join-item px-4 py-2 inline-flex items-center gap-2 rounded-sm  border-s-[3px] border-blue-500 bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                                                        <path d="M4 13a8 8 0 0 1 7 7a6 6 0 0 0 3 -5a9 9 0 0 0 6 -8a3 3 0 0 0 -3 -3a9 9 0 0 0 -8 6a6 6 0 0 0 -5 3"></path>
                                                        <path d="M7 14a6 6 0 0 0 -3 6a6 6 0 0 0 6 -3"></path>
                                                        <path d="M15 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    <p>Spaces</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('medias.index', [$singleData->brand_id, $singleData->uuid, $item->uuid]) }}"
                                                   class="join-item px-4 py-2 inline-flex items-center gap-2 rounded-sm  border-s-[3px] border-blue-500 bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                                                    <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                                                    <path d="M16 3l-4 4l-4 -4"></path>
                                                    </svg>
                                                </span>
                                                    <p>Videos</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('downloads.index', [$singleData->brand_id, $singleData->uuid, $item->uuid]) }}"
                                                   class="join-item px-4 py-2 inline-flex items-center gap-2 rounded-sm  border-s-[3px] border-blue-500 bg-blue-50 text-blue-700 hover:bg-blue-600 hover:text-white transition-all duration-300">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                        <path d="M12 17v-6"></path>
                                                        <path d="M9.5 14.5l2.5 2.5l2.5 -2.5"></path>
                                                    </svg>
                                                </span>
                                                    <p>Downloads</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <button
                                        class="tooltip tooltip-top bg-green-50 text-green-500 px-2 py-1 rounded-md hover:bg-green-500 hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                             width="24" height="24" stroke-width="1.25">
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                            </path>
                                            <path d="M16 5l3 3"></path>
                                        </svg>
                                    </button>
                                    <button
                                        class="tooltip tooltip-top bg-red-50 text-red-500 px-2 py-1 rounded-md hover:bg-red-500 hover:text-white transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                             width="24" height="24" stroke-width="1.25">
                                            <path d="M4 7l16 0"></path>
                                            <path d="M10 11l0 6"></path>
                                            <path d="M14 11l0 6"></path>
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        @endif
                    @endforeach
                @endif
            </table>
            {{-- Pagination Of laravel --}}
            <div class="m-3">
                {{ $models->links() }}
            </div>
        </div>

        {{-- form to add new brand --}}
        <div class="col-span-3 w-full pr-5">
            <form action="{{ route('models.store',[$singleData->brand_id, $singleData->uuid]) }}" method="POST" class="w-full bg-white rounded-lg p-5">
            @csrf
            @method('POST')
            <div x-data="{
                name: '',
                link: '',
                isFormValid() {
                    return this.name.trim() !== '' && this.link.trim() !== '';
                }
            }"
            class="space-y-4">
                <!-- Brand Input -->
                <input type="hidden" name="product_id" id="product_id" x-text="{{ $singleData->uuid }}" value="{{ $singleData->uuid }}"
                       class="form-control w-full bg-gray-100 rounded-sm py-1 px-2 text-[12px] font-light outline-none focus:bg-gray-200 transition-all duration-300">
                <div class="form-group w-full space-y-2">
                    <label for="name" class="text-gray-500 text-[12px]">Model</label>
                    <input type="text" name="name" id="name" x-model="name"
                        class="form-control w-full bg-gray-100 rounded-sm py-1 px-2 text-[12px] font-light outline-none focus:bg-gray-200 transition-all duration-300"
                        placeholder="Enter Model">
                </div>
                <!-- Link Input -->
                <div class="form-group w-full space-y-2">
                    <label for="link" class="text-gray-500 text-[12px]">Link</label>
                    <label class="inline-flex items-center gap-2 w-full bg-gray-100 rounded-sm py-1 px-2 text-[12px] font-light outline-none focus:bg-gray-200 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                            <path d="M9 15l6 -6"></path>
                            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                        </svg>
                        <input type="url" name="link" id="link" x-model="link"
                            class="w-full outline-none bg-transparent"
                            placeholder="https://placehold.co/100x100">
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    x-bind:disabled="!isFormValid()"
                    class="text-[14px] bg-blue-500 text-white px-4 py-1 rounded-sm mt-2 hover:bg-blue-600 disabled:bg-gray-400 disabled:cursor-not-allowed">
                    Submit
                </button>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
