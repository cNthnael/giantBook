<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function categories(){
        return $this->hasMany(Categories::class);
    }

    public function publishers(){
        return $this->belongsTo(Publishers::class);
    }
}
