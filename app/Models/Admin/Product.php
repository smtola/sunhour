<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'uuid';
    protected $casts = [
        'uuid' => 'string',  // Ensure uuid is cast to a string
    ];
    protected $fillable = ['brand_id','name'];

    public function brands()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function models(){
        return $this->hasMany(Model::class, 'model_id');
    }
}
