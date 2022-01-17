<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public $timestamps = false;
    public function Header(){
        return $this -> belongsTo(Header::class);
    }

    use HasFactory;
}
