<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Detail;
use App\Models\Payment;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiSaleController extends Controller
{
    public function buy(Request $request){
        $validator= Validator::make(request()->all(),[
            'address'=>'required',
            'total'=>'required',
            'user_id'=>'required',
            'payment_method_id'=>'required',
            'delivery_companie_id'=>'required',

            //'transaction_id'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
        ]);

        if ($validator->fails()) {
            $response=[
                'status'=>'Error',
                'data'=>$validator->getMessageBag()->first(),
                'is_valid'=>0,
                'token'=>''
            ];
            return response()->json($response, 400);
        }

        $datos_payment=[
            'transaction_id'=>Payment::count()+1,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'total'=>$request->total
        ];

        $payment=Payment::create($datos_payment);

        $datos_sale=[
            'address'=>$request->address,
            'total'=>$request->total,
            'payment_id'=>$payment->id,
            'user_id'=>$request->user_id,
            'payment_method_id'=>$request->payment_method_id,
            'delivery_companie_id'=>$request->delivery_companie_id,

        ];

        $sale=Sale::create($datos_sale);

        $response=[
            'status'=>'Ok',
            'data'=>$sale,
            'is_valid'=>1,
            'token'=>''
        ];
        return response()->json($response, 200);

    }


    public function addDetail(Request $request){
        $validator= Validator::make(request()->all(),[
            'product_id'=>'required',
            'sale_id'=>'required',
        ]);

        if ($validator->fails()) {
            $response=[
                'status'=>'Error',
                'data'=>$validator->getMessageBag()->first(),
                'is_valid'=>0,
                'token'=>''
            ];
            return response()->json($response, 400);
        }

        $datos=[
            'product_id'=>$request->product_id,
            'sale_id'=>$request->sale_id
        ];

        $detail=Detail::create($datos);

        $response=[
            'status'=>'Ok',
            'data'=>$detail,
            'is_valid'=>1,
            'token'=>''
        ];
        return response()->json($response, 200);
    }
}
