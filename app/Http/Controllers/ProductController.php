<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($brand)
    {
        $loading = true;
        $product = Product::paginate(8);
        $singleData = Brand::query()->where('uuid', $brand)->first();
        if ($product->count() > 0) {
            $loading = false;
            return view('admin.products.index', compact('loading', 'product','singleData'));
        }
        return view('admin.products.index',  compact('loading', 'product','singleData'));
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

        Product::create($data);

        return redirect()->back()->with('success', 'Product created successfully');
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
    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return redirect()->back()->with('success', 'Product deleted successfully');
        }

        return redirect()->back()->with('error', 'Product not found');
    }
}
