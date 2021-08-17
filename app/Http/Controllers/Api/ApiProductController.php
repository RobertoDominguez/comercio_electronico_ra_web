<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    public function all(){
        $data=Product::products()->get();
        $response=[
            'status'=>'ok',
            'data'=>$data
        ];
        return response()->json($response, 200);        
    }

    public function allCategorie($categorie_id){
        $data=Product::productsCategorie($categorie_id)->select('products.*')->get();
        $response=[
            'status'=>'ok',
            'data'=>$data
        ];
        return response()->json($response, 200);        
    }

    public function show($id){
        $data=Product::find($id);
        

        $error=[
            'error'=>'invalid'
        ];
        if (is_null($data)){
            return response()->json($error, 400);
        }

        $response=[
            'status'=>'ok',
            'data'=>array($data)
        ];
        return response()->json($response, 200);
    }
}
