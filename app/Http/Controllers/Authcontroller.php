<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email'=> "required",
            'password' => "required",
        ]);

        if(Auth::attempt($credentials)){
            echo "login Success";
        }
        else{
            echo "login failed";
        }
        
        // echo $request->email;
        // echo $request -> password;
    }
}
