<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Furniture;
use App\Models\Header;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function checkout(){
        return view('user.checkout');
    }

    // public function buyfurn($Furniture_id, $user_id){
    //     $furniture = Furniture::where('id', $Furniture_id)->get();
    //     $user = User::where('id',$user_id)->get();
    //     $buyfurn = new Cart();
    //     $buyfurn->furniture_id = $furniture;
    //     $buyfurn->quantity = 1;
    //     $buyfurn->save();

    //     return redirect()->back();
    // }


    // admin

    public function addfurniture(){
        return view('admin.addfurniture');
    }
    
    public function updatefurniture($Furniture_id){
        $furniture = Furniture::where('id', $Furniture_id)->get();
        return view('admin.updatefurniture', ['Furniture' => $furniture]);
    }

    public function delete($id){
        $furniture = Furniture::find($id);

        if(isset($furniture)){
            Storage::delete('storage/img/'.$furniture->image);
            $furniture->delete();
        }
        return redirect()->back();
    }

    public function confirmadd(Request $request){
        $file = $request->file('image');
        $imageName = time(). '.' . $file->getClientOriginalExtension();
        Storage::putFileAs('public/img', $file, $imageName);
        $imageName = 'storage/img/' . $imageName;

        // $image = $request->image;
        //     $image = Storage::put('storage/img', $image, 'storage');
        //     $image = explode('/', $image)[2];
        //     $image = 'storage/img/' . $image;

        $furniture = new furniture();

        $furniture->name = $request -> name;
        $furniture->price = $request -> price;
        $furniture->type = $request -> type;
        $furniture->color = $request -> color;
        $furniture->image = $imageName;
        $furniture->save();
        return redirect()->back();
    }

    public function updated($furnitureID, Request $request){
        $file = $request->file('image');
        $imageName = time(). '.' . $file->getClientOriginalExtension();
        Storage::putFileAs('public/img', $file, $imageName);
        $imageName = 'storage/img/' . $imageName;

        $furniture = Furniture::find($furnitureID);

        Storage::delete('public/img'.$furniture->image);

        $furniture->name = $request -> name;
        $furniture->price = $request -> price;
        $furniture->type = $request -> type;
        $furniture->color = $request -> color;
        $furniture->image = $imageName;
        $furniture->save();
        return redirect()->back();
    }

}
