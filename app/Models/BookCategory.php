<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    public function books(){
        return $this->hasMany(Books::class);
    }

    public function categories(){
        return $this->hasMany(Categories::class);
    }
}
