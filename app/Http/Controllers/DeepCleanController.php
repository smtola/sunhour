<?php

namespace App\Http\Controllers;

use App\Models\Admin\DeepClean;
use App\Models\Admin\Models;
use Illuminate\Http\Request;

class DeepCleanController extends Controller
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
    public function index($brand,$product,$model)
    {
        $dc = DeepClean::paginate(5);
        $models = Models::query()->where('uuid',$model)->first();
        $loading = false;
        return view('admin.models.DeepClean.index', compact('loading','brand','product','models','dc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'video' => 'required',
            'model_id' => 'required'
        ]);

        $data = $request->except(['_token','_method']);

        DeepClean::create([
            'uuid' => $this->encodeIdToString(1),
            'name' => $data['name'],
            'video' => $data['video'],
            'model_id' => $data['model_id'],
        ]);
        return redirect()->back()->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(DeepClean $deepClean)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeepClean $deepClean)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DeepClean $deepClean)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeepClean $deepClean)
    {
        //
    }
}
