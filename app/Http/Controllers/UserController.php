<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // ------- REGISTER AND LOGIN VIEW START ------------------
    public function login() {

        // if(Auth::check()){
        //   return redirect('/');
        // }

        return view('login');
    } 

    public function register(){
        return view('register');
    }

    // ------- REGISTER AND LOGIN VIEW END ------------------

    // ------- REGISTER FUNCTION START ------------------
    public function saveRegister(Request $request){

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 'Mahasiswa',
            'foto' => 'default.png'

        ]);

        return redirect ('login');
    }

    // ------- REGISTER FUNCTION END ------------------

    // ------- LOGIN & LOGOUT FUNCTION START ------------------

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

    // ------- LOGIN & LOGOUT FUNCTION END ------------------


    // ------- USER EDIT START ------------------

    public function userData()
    {
        if(auth()->user()->level == "Admin"){
            $usr = User::whereNull('deleted_at')->get();
            return view('user-data', compact('usr'));
        }
        return view('not-found');
    }

    public function show($id)
    {
        // return User::findOrFail($id); based on ID field
        
        return User::where('name', 'LIKE', "%$id%")->first();
    }

    public function deleteUser($id)
    {
        $usr = User::findOrFail($id);
        $usr->delete();
        return back();
    }

    public function changeUser($id)
    {
       $usr = User::findOrFail($id);
       return view('change-user', compact('usr'));
       // return view('')
    }

    public function postChangeUser(Request $request, $id)
    {
        if($request->password)
        {
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => $request->level,
               ]);

               return redirect ('user-data');
               
        } else if (!$request->password)
        {
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level,
               ]);

               return redirect ('user-data');
        }
    }

    // ------- USER EDIT END ------------------

    // ------- AUTH USER EDIT START ------------------

    public function profile()
    {
    $user = Auth::user(); // Retrieve currently logged-in user

    return view('user-profile', ['user' => $user]);
    }

    public function modifyProfile()
    {
       $user = Auth::user();
       return view('modify-profile', compact('user'));
      
    }

    public function postModifyProfile(Request $request)
    {
        $id = Auth::user()->id;

        if($request->password)
            {
                Auth::user('id', $id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                   ]);
    
                   return redirect ('profile');
                   
            } else if (!$request->password)
            {
                Auth::user('id', $id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                   ]);
    
                   return redirect ('profile');
            }
      
    }

    // ------- AUTH USER EDIT END ------------------


}

