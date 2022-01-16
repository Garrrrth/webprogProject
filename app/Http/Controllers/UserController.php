<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Furniture;
use App\Models\Header;
use App\Models\User;
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

    // public function buyfurn($Furniture_id, $header_id, $user_id){
    //     $furniture = Furniture::where('id', $Furniture_id)->get();
    //     $header = Header::where('id', $header_id)->get();
    //     $user = User::where('id',$user_id)->get();
    //     $buyfurn = new Cart();
    //     if (header($header_id) == null){
    //         $head = new Header();
    //     }   
    //     else{
    //         $head = header($header_id);
    //     }
    //     $buyfurn->header_id = $header;
    //     $buyfurn->furniture_id = $furniture;
    //     $buyfurn->quantity = 1;
    //     $head->save();
    //     $buyfurn->save();

    //     return redirect()->back();
    // }


    // admin

    public function addfurniture(){
        return view('admin.addfurniture');
    }
    
}
