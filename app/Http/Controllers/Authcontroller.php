<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Authcontroller extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email'=> "required",
            'password' => "required",
        ]);

        if(Auth::attempt($credentials)){
            return redirect("/admin/dashboard");
        }
        else{
            echo "login failed";
        }
        
        // echo $request->email;
        // echo $request -> password;

        
    }

    public function register(Request $request){
        $credentials = $request->validate([
            'email'=> "required",
            'password' => "required",
        ]);
        // echo $request->email;
        // echo $request -> password;

        $user = User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> bcrypt($request->password),
        ]);
        echo "registration Success";
    }
    
}
