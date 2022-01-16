<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    public $timestamp = false;
    use HasFactory;

    public function Headers(){
        return $this -> hasOne(User::class, 'user_id', 'id');
    }
}
