<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function Update(Request $request){
        
        // User::where('id', Auth::user()->id)([
        //     'name' => $request->name,
        //     'password' => bcrypt($request->password),
        //     'address' => $request->address
        // ]);
            if(auth::user()->role == 'user'){
                $validator = Validator::make($request->all(), [
                    'Name' => 'required|unique:users,name|regex:/^[a-zA-Z ]*$/',
                    'Email' => 'required|unique:users,email|email',
                    'Password' => 'required|between:5,20',
                    'Address' => 'required|between:5,95'
                ]);
                if ($validator->fails()) {
                    return redirect('/upProfile')->withInput()->withErrors($validator);
                }
                $user = User::find(Auth::user()->id);
                $user->name = $request->Name;
                $user->email = $request->Email;
                $user->password = bcrypt($request->Password);
                $user->address = $request->Address;
            }
            else{
                $validator = Validator::make($request->all(), [
                    'Name' => 'required|unique:users,name|regex:/^[a-zA-Z ]*$/',
                    'Email' => 'required|unique:users,email|email',
                    'Password' => 'required|between:5,20'
                ]);
                if ($validator->fails()) {
                    return redirect('/upProfile')->withInput()->withErrors($validator);
                }
                $user = User::find(Auth::user()->id);
                $user->name = $request->Name;
                $user->email = $request->Email;
                $user->password = bcrypt($request->Password);
            }

        $user->save();
        return redirect('profile');
    }
}
