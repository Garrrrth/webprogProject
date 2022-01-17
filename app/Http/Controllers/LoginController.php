<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $req){
        $user = User::where('email', $req->input('email'));
    }
}
