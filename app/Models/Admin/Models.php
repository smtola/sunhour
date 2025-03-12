<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Models extends Model
{
    use HasFactory;
    protected $primaryKey = 'uuid';
    protected $casts = [
        'uuid' => 'string',  // Ensure uuid is cast to a string
    ];
    protected $fillable = ['uuid', 'product_id','name', 'link'];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function modelfunction()
    {
        return $this->hasMany(ModelFunction::class);
    }

    public function dailyclean(){
        return $this->hasMany(DailyClean::class);
    }
}
