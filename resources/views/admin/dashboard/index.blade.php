@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="grid grid-cols-12 gap-4 w-full mt-8 mx-auto">
        <article class="col-span-3 card card bg-blue-50 w-full mx-auto shadow-sm hover:shadow-md transition-all duration-300">
            <div class="card-body text-blue-700">
                <h1 class="stat-title text-blue-700">Total Brands</h1>
                <strong class="card-desc stat-value text-blue-700 text-2xl">
                    10
                </strong>
            </div>
        </article>
        <article class="col-span-3 card card bg-cyan-50 w-full mx-auto shadow-sm hover:shadow-md transition-all duration-300">
            <div class="card-body">
                <h1 class="stat-title text-cyan-700">Total Products</h1>
                <strong class="card-desc stat-value text-cyan-700 text-2xl">
                    10
                </strong>
            </div>
        </article>
        <article class="col-span-3 card card bg-emerald-50 w-full mx-auto shadow-sm hover:shadow-md transition-all duration-300">
            <div class="card-body text-emerald-700">
                <h1 class="stat-title text-emerald-700">Total Models</h1>
                <strong class="card-desc stat-value text-emerald-700 text-2xl">
                    10
                </strong>
            </div>
        </article>
         <article class="col-span-3 card card bg-green-50 w-full mx-auto shadow-sm hover:shadow-md transition-all duration-300">
            <div class="card-body text-green-500">
                <h1 class="stat-title text-green-500">Total Showrooms</h1>
                <strong class="card-desc stat-value text-green-500 text-2xl">
                    10
                </strong>
            </div>
        </article>
    </div>
@endsection