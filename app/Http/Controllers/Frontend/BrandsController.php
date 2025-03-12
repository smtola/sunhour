<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\DailyClean;
use App\Models\Admin\DeepClean;
use App\Models\Admin\ModelFunction;
use App\Models\Admin\Tecnology;
use Illuminate\Http\Request;
use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use App\Models\Admin\Models;
class BrandsController extends Controller
{
    public function index()
    {
        $brand = Brand::get();
        return view('frontends.brands.index',compact('brand'));
    }

    public function show($brand)
    {
        $product = Product::get();
        $brands = Brand::query()->where('uuid',$brand)->first();
        return view('frontends.brands.show', compact('brands','product'));
    }

    public function model($brand,$product)
    {
        $model = Models::get();
        $brands = Brand::query()->where('uuid',$brand)->first();
        $products = Product::query()->where('uuid',$product)->first();
        return view('frontends.brands.ModelClient.index', compact('products', 'brands','model'));
    }
    public function model_details($brand,$product,$model)
    {
        $models = Models::query()->where('uuid', $model)->first();
        $functions = ModelFunction::get();
        $daily = DailyClean::query()->where('model_id', $models->uuid)->first();
        $deep = DeepClean::query()->where('model_id', $models->uuid)->first();
        return view('frontends.brands.ModelClient.ModelDetail.index', compact('models', 'brand', 'product','functions','daily','deep'));
    }
}
