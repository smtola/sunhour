<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        return view('frontends.brands.index');
    }

    public function show($brand = 'TOTO')
    {
        return view('frontends.brands.show', compact('brand'));
    }

    public function model($brand = 'TOTO',$product = 'Toilet',$model = 'CS902VT')
    {
        return view('frontends.brands.ModelClient.index', compact('product', 'brand', 'model'));
    }
    public function model_details($brand = 'TOTO',$product = 'Toilet',$model = 'CS902VT')
    {
        return view('frontends.brands.ModelClient.ModelDetail.index', compact('model', 'brand', 'product'));
    }
}
