<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){

        return view("login");
    }
    public function loginpost(LoginRequest $request){
        dd($request->all());

        
      
      
    }
}
