<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;
    //relacion muchos a uno
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function caregory(){
        return $this->belongsTo(Category::class);
    }


    //relacion muchos a muchois
    public function tag(){
        return $this->belongsToMany(Tag::class);
    }


    //RELACION UNO A UNO POLIFORMICA
    public function img(){
        return $this->morphOne(Img::class,'imageable');
    }
}
