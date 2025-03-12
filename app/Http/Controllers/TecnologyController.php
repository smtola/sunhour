<?php

namespace App\Http\Controllers;

use App\Models\Admin\ModelFunction;
use App\Models\Admin\Tecnology;
use Illuminate\Http\Request;

class TecnologyController extends Controller
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
        public function index($brand,$product,$model,$functions)
        {
            $tech = Tecnology::paginate(8);
            $functions = ModelFunction::query()->where('uuid', $functions)->first();
            $loading = $tech->isEmpty();
            return view('admin.models.functions.details.index', compact('brand','product','model','loading','functions','tech'));
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
        $request->validate([
            'name' => 'required',
            'functions_id' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);
        $data = $request->except(['_token','_method']);

        Tecnology::create([
            'uuid' => $this->encodeIdToString(1),
            'name' => $data['name'],
            'description' => $data['description'],
            'functions_id' => $data['functions_id'],
            'link' => $data['link'],
        ]);

        return redirect()->back()->with('success', 'Function created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnology $tecnology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnology $tecnology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tecnology $tecnology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnology $tecnology)
    {
        //
    }
}
