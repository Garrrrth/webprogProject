<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;
    use HasFactory;
    
    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function furniture(){
        return $this -> hasOne(Furniture::class, 'id', 'furniture_id');
    }


}
