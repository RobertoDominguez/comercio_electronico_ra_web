<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;
use App\Administrador;
use Auth;

class AdministratorController extends Controller
{

    public function __construct(){
        $this->middleware('guest')->except('logout'); 
    }

    public function getLogin(){
        return view('administrator.login');
    }

    public function login(){
        $credentials=$this->validate(request(),
        ['email'=>'email|required|string',
        'password'=>'required|string']);

        if (Auth::guard('administrator')->attempt($credentials)){ 
            return redirect(route('administrator.menu'));
        }
        return back()
        ->withErrors(['email'=>'Estas credenciales no concuerdan con nuestros registros.'])
        ->withInput(request(['email']));
    }

    public function logout(){
        Auth::guard('administrator')->logout();
        return redirect(route('administrator.login_view'));
    }

}
