<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable=[
        'address',
        'total',
        'payment_id',
        'user_id',
        'payment_method_id',
        'delivery_companie_id',
 
    ];
}
