<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiUserController extends Controller
{
    
    public function login(Request $request){
        $validator= Validator::make(request()->all(),[
            'email'=>'email|required|string',
            'password'=>'required'
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

        $user=User::where('email',$request->email)->first();
        if (is_null($user)){
            $response=[
                'status'=>'Error',
                'data'=>'El email introducido no existe',
            ];
            return response()->json($response, 400);
        }

        if (Hash::check($request->password, $user->password)){
            $response=[
                'status'=>'Ok',
                'data'=>$user
            ];
            return response()->json($response, 200);
        }else{
            $response=[
                'status'=>'Error',
                'data'=>'La contraseña es incorrecta',
            ];
            return response()->json($response, 400);
        }
    }

    public function signup(Request $request){
 
        $validator= Validator::make(request()->all(),[
            'email'=>'email|required|string',
            'name'=>'required',
            'password'=>'required|same:password_confirm|min:8',
            'password_confirm'=>'required'
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

        if (!is_null(User::where('email',$request->email)->first())){
            $response=[
                'status'=>'Error',
                'data'=>'El email introducido ya existe',
                'is_valid'=>0,
                'token'=>''
            ];
            return response()->json($response, 400);
        }

        $data=[
            'image'=>'',
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ];

        $user=User::create($data);
        $response=[
            'status'=>'Ok',
            'data'=>$user,
            'is_valid'=>1,
            'token'=>''
        ];
        return response()->json($response, 200);
    }

    public function show($id){
        $data=User::find($id);
        

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
