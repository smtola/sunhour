<?php

namespace App\Http\Controllers;

use App\Models\Admin\Models;
use Illuminate\Http\Request;
use App\Http\Requests\ModelRequest;
use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Date;
use function PHPUnit\Framework\isEmpty;

class ModelsController extends Controller
{
    private function encodeIdToString($id, $length = 10)
    {
        $id = (int)$id;
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $saltLength = $length - strlen((string)$id) - 2;
        $salt = '';
        for ($i = 0; $i < max(4, $saltLength); $i++) {
            $salt .= $characters[rand(0, strlen($characters) - 1)];
        }
        $combined = $salt . '-' . $id;
        return base64_encode($combined);
    }
    /**
     * Display a listing of the resource.
     */
    public function index($brand,$product)
    {
        $models = Models::paginate(8);
        $singleData = Product::query()->where("uuid", $product)->first();
        $loading = $models->isEmpty();
        return view('admin.models.index', compact('loading','models','singleData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'product_id' => 'required',
            'link' => 'required',
        ]);
        $data = $request->except(['_token','_method']);

        Models::create([
            'uuid' => $this->encodeIdToString(1),
            'name' => $data['name'],
            'product_id' => $data['product_id'],
            'link' => $data['link'],
        ]);

        return redirect()->back()->with('success', 'Model created successfully');
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
