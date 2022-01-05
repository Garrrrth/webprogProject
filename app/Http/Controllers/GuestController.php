<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GuestController extends Controller
{
    public function home(){
        
        return view('guest.home');
    }
    public function login(){
        
        return view('guest.login');
    }

    public function register(){
        return view('guest.register');
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
}
