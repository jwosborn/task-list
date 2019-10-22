<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request) {
        $request->session()->forget('username');
        $request->session()->forget('error');
        return redirect('/login');
    }
}
