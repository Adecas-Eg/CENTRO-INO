<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    use HasFactory;

    //relaciones polimorfica con cualquiera

    public function imageable(){
        return $this->morphTo();
    }
}
