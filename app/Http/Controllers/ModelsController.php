<?php

namespace App\Http\Controllers;

use App\Models\Admin\Models;
use Illuminate\Http\Request;
use App\Http\Requests\ModelRequest;
use App\Models\Admin\Brand;
use App\Models\Admin\Product;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {  
            $model = Models::paginate(10);
            $brand = Brand::find(1);
            $product = Product::find(1);
            $loading = false;

            return view('admin.models.index', compact('loading','model','brand','product'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brand = Brand::find(1);
        $product = Product::find(1);
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]); 

        $data = $request->except(['_token','_method']);

        Models::create($data);

        return redirect()->route('models.index',[$brand,$product])->with('success', 'Model created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Models $models)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Models $models)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Models $models)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Models $models)
    {
        //
    }
}
