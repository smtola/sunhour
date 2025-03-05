<?php

namespace App\Http\Controllers;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {  
       $data = Brand::paginate(10);
       $product = 'TOTO';
       $isloading = false;
       $loading = false;
       if($data->count() < 0){
         $loading = true;
       }

       return view('admin.brands.index', compact('loading','data','isloading','product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]); 

        $data = $request->except(['_token','_method']);

        $brand = Brand::create($data);

        return redirect()->route('brands.index')->with('success', 'Brand created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
