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

        $user=\App\User::where('email', $loginUser)->get();

        if(!$user){
            $error='Invalid Username';
            Session()->put('error', $error);
            return redirect('/login');
        } elseif (Hash::check($loginPassword, $user[0]->password)){
            $userData=[$user[0]->email, $user[0]->username];
            $request->Session(['username' => $user[0]->username]);
            return view('/');
        } else {
            $error='Invalid Password';
            Session()->put('error', $error);
            return redirect('/login');

        }
    }
   }

