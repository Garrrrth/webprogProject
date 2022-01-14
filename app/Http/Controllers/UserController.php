<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        
        return view('page.profile');
    }

    public function update(){
        return view('profile.upProfile');
    }
}
