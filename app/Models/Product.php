<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'active',
        'discount_id',
        'description',
        'id',
        'image',
        'name',
        'price',
        'rank',
        'removed',
        'stock',
    ];

    public function scopeProducts($query){
        return $query->where('active',true)->where('removed',false);
    }
}
