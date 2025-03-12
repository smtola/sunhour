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
                            <a href="{{ route('brands.index', $brand) }}" class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                                    stroke-width="1.25">
                                    <path d="M5 12l14 0"></path>
                                    <path path d="M5 12l4 4"></path>
                                    <path d="M5 12l4 -4"></path>
                                </svg>
                                <p>Brands</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.index', [$brand, $product]) }}">Products</a>
                        </li>
                        <li>
                            <a href="{{ route('models.index', [$brand, $product]) }}">Models</a>
                        </li>
                        <li>
                            <a href="{{ route('functions.index', [$brand, $product, $model]) }}">Functions</a>
                        </li>
                        <li>Add Details</li>
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
        <div class=" bg-white rounded-lg col-span-9 h-[80vh]">
            <table class="table ">
                <thead>
                    <tr class="text-gray-500 border-gray-200">
                        <th class="w-[200px]">Function Name</th>
                        <th>Description</th>
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
                    <tbody>
                        @foreach($tech as $item)
                            @if($item->functions_id === $functions->uuid)
                                <tr class="w-full hover:bg-gray-100 border-gray-200 border-b">
                                    <td >
                                        <div class="flex items-center gap-2">
                                            <img src="{{$item->link}}" alt="" class="w-10 h-10 rounded-full">
                                            <p class="capitalize">
                                                {{$item->name}}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="overflow-hidden">
                                        <p class="capitalize text-wrap text-balance line-clamp-2">{{$item->description}} </p>
                                    </td>
                                    <td class="inline-flex items-center gap-2 float-end">
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
                            @endif
                        @endforeach
                    </tbody>
                @endif
            </table>
            {{-- Pagination Of laravel --}}
            <div class="m-3">
                {{ $tech->links() }}
            </div>
        </div>

        {{-- form to add new brand --}}
        <div class="col-span-3 w-full pr-5">
             <form action="" method="POST" class="w-full bg-white rounded-lg p-5">
                @csrf
                <div x-data="{
                    description: '',
                    link: '',
                    isFormValid() {
                        return this.description.trim() !== '' && this.link.trim() !== '';
                    }
                }"
                class="space-y-4">
                    <input type="hidden" name="functions_id" id="functions_id" x-text="{{ $functions->uuid }}" value="{{ $functions->uuid }}"
                           class="form-control w-full bg-gray-100 rounded-sm py-1 px-2 text-[12px] font-light outline-none focus:bg-gray-200 transition-all duration-300"
                           placeholder="Enter Daily Clean">
                    <!-- Daily Clean Input -->
                    <div class="form-group w-full space-y-2">
                        <label for="name" class="text-gray-500 text-[12px]">Function Name</label>
                        <input type="text" readonly name="name" id="name" x-text="{{$functions->name}}" value="{{$functions->name}}"
                            class="form-control w-full bg-gray-100 rounded-sm py-1 px-2 text-[12px] font-light outline-none focus:bg-gray-200 transition-all duration-300"
                            placeholder="Enter Daily Clean">
                    </div>
                    {{-- Description Input --}}
                    <div class="form-group w-full space-y-2">
                        <label for="description" class="text-gray-500 text-[12px]">Description</label>
                        <textarea type="text" name="description" id="description" x-model="description"
                            class="form-control w-full bg-gray-100 rounded-sm py-1 px-2 text-[12px] font-light outline-none focus:bg-gray-200 transition-all duration-300"
                            placeholder="Enter Description" rows="5"></textarea>
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
