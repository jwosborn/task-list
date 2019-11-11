<?php

namespace App\Http\Controllers;
use \App\User;
use \App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController1 extends Controller
{
   public function index() 
   {
    return view('login');
   }

   public function login(Request $request)
   {

        $loginUser = $request->input('email');
        $loginPassword = $request->input('password');

        $user=User::where('email', $loginUser)->first();

        if(!$user){
            $error='Invalid Username';
            Session()->put('error', $error);
            return redirect('/login');
        } elseif (Hash::check($loginPassword, $user->password)){
            Session()->put('username', $user->username);
            Session()->forget('error');
            return redirect('/');
        } else {
            $error='Invalid Password';
            Session()->put('error', $error);
            return redirect('/login');
        }
    }
   }

