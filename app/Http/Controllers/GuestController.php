<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories as CategoriesModel;
use App\Models\Books as BooksModel;
use App\Models\Details as DetailsModel;

class GuestController extends Controller
{
    public function login(){
        
        return view('guest.login');
    }
}
