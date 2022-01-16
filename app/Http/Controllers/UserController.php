<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        
        return view('page.profile');
    }

    public function update(){
        return view('profile.upProfile');
    }

    public function detail($Furniture_id){
        $furniture = Furniture::where('id', $Furniture_id)->get();
        return view('page.vfurnituredetail', ['Furniture' => $furniture]);
    }

    public function cart(){
        return view('user.cart');
    }


    // admin

    public function addfurniture(){
        return view('admin.addfurniture');
    }
}
