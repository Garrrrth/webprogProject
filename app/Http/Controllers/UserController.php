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

    public function detail(){
        return view('page.vfurnituredetail');
    }

    public function cart(){
        return view('user.cart');
    }


    // admin

    public function addfurniture(){
        return view('admin.addfurniture');
    }
}
