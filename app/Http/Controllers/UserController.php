<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('login');
    } 

    public function register(){
        return view('register');
    }

    public function saveRegister(Request $request){

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level,

        ]);

        return redirect ('login');
    }
}
