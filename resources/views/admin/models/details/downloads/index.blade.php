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
                            <a href="{{ route('details.index', [$brand, $product, $model]) }}">Describe Concepts</a>
                        </li>
                        <li>Add Files Download</li>
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
                        <th>Files</th>
                        <th></th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                @if ($loading)
                    <div class="inline-flex items-end gap-2">
                        <p>Loading</p>
                        <span class="loading loading-dots loading-xs text-gray-500"></span>
                    </div>
                @else
                    <tbody>
                        <tr class="w-full hover:bg-gray-100 border-gray-200 border-b">
                            <td class="flex items-center gap-2">
                                <img src="https://placehold.co/100x100" alt="" class="w-10 h-10 rounded-full">
                                <p>Brand Name</p>
                            </td>
                            <td class="tr-only">
                            </td>
                            <td class="inline-flex items-center gap-2 float-end">
                                <button
                                    class="tooltip tooltip-top bg-green-50 text-green-500 px-2 py-1 rounded-md hover:bg-green-500 hover:text-white transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24"
                                        height="24" stroke-width="1.25">
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                        </path>
                                        <path d="M16 5l3 3"></path>
                                    </svg>
                                </button>
                                <button
                                    class="tooltip tooltip-top bg-red-50 text-red-500 px-2 py-1 rounded-md hover:bg-red-500 hover:text-white transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24"
                                        height="24" stroke-width="1.25">
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
            </table>
            {{-- Pagination Of laravel --}}
            <div class="my-16">
                <div class="flex items-center justify-end">
                    {{-- {{ $model->links() }} --}}
                </div>
            </div>
        </div>

        {{-- form to add new brand --}}
        <div class="col-span-3 w-full pr-5">
            <form action="" method="POST" class="w-full bg-white rounded-lg p-5">
                @csrf
                <div x-data="{
                    file: null,
                    name: '',
                    isFormValid() {
                        return this.file !== null && this.name.trim() !== '';
                    }
                }" class="space-y-4">
                    <!-- Image Upload -->
                    <div class="flex items-center justify-center w-full form-group space-y-2 mt-2">
                        <label for="dropzone-file"
                            class="relative flex flex-col items-center justify-center border-2 border-gray-300 border-dashed rounded-full cursor-pointer py-2 px-3">
                            <img x-show="file" :src="URL.createObjectURL(file)"
                                class="absolute inset-0 w-full h-full object-cover object-center rounded-full">
                            <div class="bg-black/20 absolute inset-0 rounded-full"></div>
                            <div class="relative flex flex-col items-center justify-center pt-5 pb-6 z-[1]">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="#fff" stroke-linecap="round" stroke-linejoin="round" width="24"
                                    height="24" stroke-width="1.25">
                                    <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                                    <path d="M9 15l3 -3l3 3"></path>
                                    <path d="M12 12l0 9"></path>
                                </svg>
                                <p class="mb-2 text-[12px] text-white"><span class="font-semibold">Click to upload</span>
                                </p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" name="image"
                                @change="file = $event.target.files[0]">
                        </label>
                    </div>

                    <!-- name Input -->
                    <div class="form-group w-full space-y-2">
                        <label for="name" class="text-gray-500 text-[12px]">File Name</label>
                        <input type="text" name="name" id="name" x-model="name"
                            class="form-control w-full bg-gray-100 rounded-sm py-1 px-2 text-[12px] font-light outline-none focus:bg-gray-200 transition-all duration-300"
                            placeholder="Enter File Name">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" :disabled="!isFormValid()"
                        class="text-[14px] bg-blue-500 text-white px-4 py-1 rounded-sm mt-2 hover:bg-blue-600 disabled:bg-gray-400 disabled:cursor-not-allowed">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
