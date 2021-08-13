<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ApiCategorieController extends Controller
{
    public function all(){
        $data=Categorie::all();
        $response=[
            'status'=>'ok',
            'data'=>$data
        ];
        return response()->json($response, 200);        
    }
}
