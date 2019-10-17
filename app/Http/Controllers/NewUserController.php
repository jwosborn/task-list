<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewUserController extends Controller
{
    public function index() 
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $user = new \App\User();
        $user->username=$request->input('username');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->isLoggedIn=1;
        $user->save();
        return view('index');
    }
}
