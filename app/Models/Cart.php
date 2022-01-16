<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamp = false;
    use HasFactory;
    
    public function carts(){
        return $this -> hasOne(Header::class, 'header_id','id');
        return $this -> hasMany(Furniture::class, 'furniture_id', 'id');
    }


}
