<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ModelFunction;
use App\Models\Admin\Models;
use App\Models\Admin\Tecnology;
use Illuminate\Http\Request;

class FunctionController extends Controller
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
    public function index($brand,$product,$model)
    {
        $functions = ModelFunction::paginate(8);
        $models = Models::query()->where('uuid', $model)->first();
        $loading = $functions->isEmpty();
        $loading = false;
        return view('admin.models.functions.index', compact('brand','product','models','loading','functions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'model_id' => 'required',
            'icon' => 'required',
        ]);
        $data = $request->except(['_token','_method']);

        ModelFunction::create([
            'uuid' => $this->encodeIdToString(1),
            'name' => $data['name'],
            'model_id' => $data['model_id'],
            'icon' => $data['icon'],
        ]);

        return redirect()->back()->with('success', 'Function created successfully');
    }

}
