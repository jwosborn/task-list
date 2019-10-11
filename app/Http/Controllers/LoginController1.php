<?php

namespace App\Http\Controllers;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController1 extends Controller
{
   public function index() 
   {
    return view('login');
   }

   public function login(Request $request )
   {
        $this->validate(request(),[
            'username' => 'required|e-mail',
            'password' => 'required|min:2'
        ]);

        $loginUser=$request->email;
        $loginPassword=$request->password;

        $user=\App\User::where('email', $loginuser)->get();

        if($user->isEmpty()){
            $error='Invalid Username';
            return redirect('/login')->with('error', $error);
        } elseif (Hash::check($loginPassword, user[0]->password)){
            $user->isLoggedIn=1;
            $userData=[$user[0]->email, $user[0]->username, $user[0]->isLoggedIn];
            $request->session()->put('user', $user[0]->username);
            return view('/');
        } else {
            $error='Invalid Password';
            return redirect('/login')->with('error', $error);

        }
    }
   }

