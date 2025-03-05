<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FunctionController extends Controller
{
     public function index()
        {
                $model = 'HDJDJLD';
                $brand = 'TOTO';
                $product = 'Tolet';
                $function = 'autorenew';
                
                $loading = false;
                if($model === ''){
                    $loading = true;
                }

                return view('admin.models.functions.index', compact('loading','model','brand','product','function'));
        }
}
