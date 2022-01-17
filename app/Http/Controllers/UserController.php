<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Detail;
use App\Models\Furniture;
use App\Models\Header;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        $user = Auth::user();
        $header = Header::where('customer_id', $user->id)->get();

        return view('user.checkout', ['header' => $header]);
    }

    public function buyfurn($Furniture_id, $user_id){
        // $furniture = Furniture::where('id', $Furniture_id)->get();
        // $user = User::where('id',$user_id)->get();
        

        $cart = Cart::where('user_id', $user_id);
            $buyfurn = new Cart();
        $buyfurn->user_id = $user_id;
        $buyfurn->furniture_id = $Furniture_id;
        $buyfurn->quantity = 1;
        $buyfurn->save();
       

        return redirect('/');
    }

    public function showfurn(){
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->get();

        return view('user.cart', ['cart' => $cart]);
    }

    public function plusquantity($furniture_id){
        $cart = Cart::where('furniture_id',$furniture_id)->get();
        $cart-> quantity = $cart-> quantity+1;
    }
    public function minquantity($furniture_id){
        $cart = Cart::where('furniture_id',$furniture_id)->get();
        $cart-> quantity = $cart-> quantity -1;
        if($cart->quantity = 0){
            $cart->delete();
        }
    }

    public function check(){
        $user = auth::user();
        $carts = $user->cart;

        $header = new Header();
        $header -> customer_id = $user->id;
        $header->save();

        foreach($carts as $cart){
            $detail = new Detail();
            $detail->header_id = $header->id;
            $detail->furniture_id = $cart->furniture_id;
            $detail->quantity = $cart->quantity;
            $detail->save();
        }

        return redirect('checkout');
    }

    public function bayar($header_id,Request $request){
            $header = Header::where('id',$header_id);
            $header-> method = $request->method;
            $header-> card_number = $request->card_number;
            $header->save();
    }


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

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:15|unique:furniture,name,',
            'price' => 'required|numeric|between:5000,10000000',
            'image' => 'nullable|mimes:jpg,png,jpeg'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        
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
        return redirect('/');
    }

    public function updated($furnitureID, Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:15|unique:furniture,name,',
            'price' => 'required|numeric|between:5000,10000000',
            'image' => 'nullable|mimes:jpg,png,jpeg'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

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
        return redirect('/');
    }

}
