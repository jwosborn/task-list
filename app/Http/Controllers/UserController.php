<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getLoggedInUser() {
       $loggedInUser = Session()->get('username');
       return $loggedInUser;
    }
}
