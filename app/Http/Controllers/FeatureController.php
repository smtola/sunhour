<?php

namespace App\Http\Controllers;

use App\Models\Admin\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
                $model = 'HDJDJLD';
                $brand = 'TOTO';
                $product = 'Tolet';
                $loading = false;
                if($model === ''){
                    $loading = true;
                }

                return view('admin.models.details.features.index', compact('loading','model','brand','product'));
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
    // In your controller
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'brand' => 'required|string',
    //         'descriptions' => 'required|array|min:1',
    //         'descriptions.*.text' => 'required|string',
    //     ]);

    //     // Convert descriptions to JSON
    //     $descriptionsJson = json_encode($request->input('descriptions'));

    //     // Store in database or process as needed
    //     YourModel::create([
    //         'brand' => $request->brand,
    //         'descriptions' => $descriptionsJson,
    //     ]);

    //     return redirect()->back()->with('success', 'Submitted successfully');
    // }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        //
    }
}
