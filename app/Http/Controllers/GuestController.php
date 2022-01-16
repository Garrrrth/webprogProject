<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use App\Models\User;
use Illuminate\Http\Request;


class GuestController extends Controller
{
    public function home(){
        $furniture = Furniture::Paginate(4);
        return view('page.home', ["Furniture" => $furniture]);
    }
    public function login(){
        
        return view('page.login');
    }

    public function register(){
        return view('page.register');
    }

    public function viewfurniture(){
        $furniture = Furniture::Paginate(4);
        return view('page.vfurniture', ["Furniture" => $furniture]);
    }

    public function logon(Request $request){
        $email = $request->email;
        $password = $request->password;

        if(auth()->attempt(['email'=>$email, 'password'=>$password])){
            return redirect('/home');
        }else{
            return redirect('/login');
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/home');
    }

    public function userregister(Request $request){
        $user = new User();
        $user->name = $request->Name;
        $user->email = $request->Email;
        $user->password = bcrypt($request->Password);
        $user->address = $request->Address;
        $user->gender = $request->Gender;
        $user->role = 'user';

        $user->save();
        return redirect()->back();
    }
}
