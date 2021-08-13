<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;
use App\Administrador;
use Auth;

class UserAdministratorController extends Controller
{

    public function menu(){
        return view('administrator.menu');
    }

}
