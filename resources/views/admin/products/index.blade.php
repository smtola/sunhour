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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                                    <path d="M5 12l14 0"></path>
                                    <path path d="M5 12l4 4"></path>
                                    <path d="M5 12l4 -4"></path>
                                </svg>
                                <p class="uppercase font-bold">
                                    {{ $singleData->name }}
                                </p>
                            </a>
                        </li>
                        <li>
                            Products
                        </li>
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
                                    class="flex cursor-pointer items-center gap-2 pb-1 text-gray-900 transition bg-white rounded-lg px-4 py-2"
                                >
                                    <span class="transition">
                                        <svg class="group-open:fill-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="22" height="22" stroke-width="1.25">
                                            <path d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z"></path>
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium"> Filter </span>
                                </summary>

                                <div class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2">
                                    <div class="w-96 rounded-sm border border-gray-200 bg-white">
                                    <header class="flex items-center justify-between p-4">
                                        <span class="text-sm text-gray-700"> 0 Selected </span>

                                        <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                        Reset
                                        </button>
                                    </header>

                                    <ul class="space-y-1 border-t border-gray-200 p-4">
                                        <li>
                                        <label for="FilterInStock" class="inline-flex items-center gap-2">
                                            <input
                                            type="checkbox"
                                            id="FilterInStock"
                                            class="size-5 rounded-sm border-gray-300"
                                            />

                                            <span class="text-sm font-medium text-gray-700"> In Stock (5+) </span>
                                        </label>
                                        </li>

                                        <li>
                                        <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                                            <input
                                            type="checkbox"
                                            id="FilterPreOrder"
                                            class="size-5 rounded-sm border-gray-300"
                                            />

                                            <span class="text-sm font-medium text-gray-700"> Pre Order (3+) </span>
                                        </label>
                                        </li>

                                        <li>
                                        <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                                            <input
                                            type="checkbox"
                                            id="FilterOutOfStock"
                                            class="size-5 rounded-sm border-gray-300"
                                            />

                                            <span class="text-sm font-medium text-gray-700"> Out of Stock (10+) </span>
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
        <div class="grid grid-cols-12 space-x-5 mt-5">
            <div class="bg-white rounded-lg col-span-9 h-fit">
                <table class="table ">
                        <thead>
                            <tr class="text-gray-500 border-gray-200">
                                <th>Product</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        @if($loading)
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
                                @foreach ($product as $item)
                                    @if($singleData->uuid === $item->brand_id)
                                        <tr class="hover:bg-gray-100 border-gray-200 border-b">
                                            <td>
                                                <p>{{ $item->name }}</p>
                                            </td>
                                            <td class="inline-flex gap-2 float-end">
                                                <a data-tip="Go to Models"
                                                   href="{{ route('models.index', [$singleData->uuid, $item->uuid]) }}" class="bg-info/10 px-2 py-1 rounded-md tooltip tooltip-top tooltip-info link link-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                                                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                                                        <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                                                        <path d="M9 12l.01 0"></path>
                                                        <path d="M13 12l2 0"></path>
                                                        <path d="M9 16l.01 0"></path>
                                                        <path d="M13 16l2 0"></path>
                                                    </svg>
                                                </a>
                                                <button class="tooltip tooltip-top bg-green-50 text-green-500 px-2 py-1 rounded-md hover:bg-green-500 hover:text-white transition-all duration-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.25">
                                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                        <path d="M16 5l3 3"></path>
                                                    </svg>
                                                </button>
                                                <form action="{{ route('products.destroy', [$singleData->uuid, $item->uuid]) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="tooltip tooltip-top bg-red-50 text-red-500 px-2 py-1 rounded-md hover:bg-red-500 hover:text-white transition-all duration-300"
                                                            onclick="return confirm('Are you sure you want to delete this product?')">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 24 24"
                                                             fill="none"
                                                             stroke="currentColor"
                                                             stroke-linecap="round"
                                                             stroke-linejoin="round"
                                                             width="24"
                                                             height="24"
                                                             stroke-width="1.25">
                                                            <path d="M4 7h16"></path>
                                                            <path d="M10 11v6"></path>
                                                            <path d="M14 11v6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12"></path>
                                                            <path d="M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                        <span class="sr-only">Delete</span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        @endif
                </table>
                {{-- Pagination Of laravel --}}
                <div class="m-3">
                    {{ $product->links() }}
                </div>
            </div>

            {{-- form to add new brand --}}
            <div class="col-span-3 w-full pr-5">
                <form action="" method="POST" class="w-full bg-white rounded-lg p-5">
                @csrf
                <div x-data="{
                    name: '',
                    isFormValid() {
                        return this.name.trim() !== '';
                    }
                }" class="space-y-4">

                    <!-- Product Input -->
                    <div class="form-group w-full space-y-2">
                        <label for="name" class="text-gray-500 text-[12px]">Product</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            x-model="name"
                            class="form-control w-full bg-gray-100 rounded-sm py-1 px-2 text-[12px] font-light outline-none focus:bg-gray-200 transition-all duration-300"
                            placeholder="Enter Product"
                        >
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        :disabled="!isFormValid()"
                        class="text-[14px] bg-blue-500 text-white px-4 py-1 rounded-sm mt-2 hover:bg-blue-600 disabled:bg-gray-400 disabled:cursor-not-allowed"
                    >
                        Submit
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
