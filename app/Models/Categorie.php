<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'active',
        'removed'
    ];

    public function scopeCategories($query){
        return $query->where('active',true)->where('removed',false);
    }
    
}
