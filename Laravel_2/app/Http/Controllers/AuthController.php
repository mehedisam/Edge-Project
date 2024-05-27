<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view("frontend.pages.login");
    }
    public function signup(){
        return view("frontend.pages.signup");
    }
    public function signupPost(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]
        );

        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=hash::make($request->password);
        $user->save();
        return redirect('login');
        //return view("frontend.pages.signup");
    }
}
