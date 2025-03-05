<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(10);
        $brand = Brand::find(1);
       $loading = false;
       if($product->count() < 0){
         $loading = true;
       }

       return view('admin.products.index', compact('loading','product','brand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brand = Brand::find(1);
        $request->validate([
            'name' => 'required',
        ]); 

        $data = $request->except(['_token','_method']);

        Product::create($data);

        return redirect()->route('products.index',$brand)->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
