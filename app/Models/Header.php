<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function detail(){
        return $this -> hasMany(Detail::class);
    }
}
