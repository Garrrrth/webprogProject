<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MemberController extends Controller
{
    public function Update(Request $request){
        
        // User::where('id', Auth::user()->id)([
        //     'name' => $request->name,
        //     'password' => bcrypt($request->password),
        //     'address' => $request->address
        // ]);

        $user = User::find(Auth::user()->id);
        $user->name = $request->Name;
        $user->email = $request->Email;
        $user->password = bcrypt($request->Password);
        $user->address = $request->Address;

        $user->save();
        return redirect('profile');
    }
}
