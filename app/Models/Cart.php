<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamp = false;
    use HasFactory;
    
    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function furniture(){
        return $this -> hasMany(Furniture::class, 'furniture_id', 'id');
    }


}
