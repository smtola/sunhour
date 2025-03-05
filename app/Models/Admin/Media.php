<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Media extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'link'];
}
