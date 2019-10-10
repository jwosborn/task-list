<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getLoggedInUser(Request $request)
    {
       $loggedInUser = \App\User::where('isLoggedIn', 1)->first();
        return $loggedInUser->username;
    }
}
