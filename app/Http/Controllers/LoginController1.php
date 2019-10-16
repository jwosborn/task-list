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
            'email' => 'required|e-mail',
            'password' => 'required|min:2'
        ]);

        $loginUser=$request->email;
        $loginPassword=$request->password;

        $user=\App\User::where('email', $loginUser)->first();

        if(!$user){
            $error='Invalid Username';
            Session()->put('error', $error);
            return redirect('/login');
        } elseif (Hash::check($loginPassword, $user->password)){
            $userData=[$user->email, $user->username];
            Session(['username' => $user->username]);
            return view('/');
        } else {
            $error='Invalid Password';
            Session()->put('error', $error);
            return redirect('/login');

        }
    }
   }

