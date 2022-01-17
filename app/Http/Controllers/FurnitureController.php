<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $furniture = Furniture::where('name', "like", "%$search%")->paginate(4);
        return view('page.vfurniture', ["Furniture" => $furniture]);
    }
}
