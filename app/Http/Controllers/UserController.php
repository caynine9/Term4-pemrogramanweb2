<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function postLogin(Request $request){
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){

            return redirect('/');
        }
        else{
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
