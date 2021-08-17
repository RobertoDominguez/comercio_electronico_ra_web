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

    public function scopeProductsCategorie($query,$id_categorie){
        return $query->join('product_categories','product_categories.product_id','products.id')
        ->join('categories','categories.id','product_categories.categorie_id')
        ->where('categories.id',$id_categorie)
        ->where('products.active',true)->where('products.removed',false);
    }
}
