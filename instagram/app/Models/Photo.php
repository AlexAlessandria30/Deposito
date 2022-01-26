<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;



    public function tags(){  // NOTA QUI E' PLURALE
        // https://laravel.com/docs/8.x/eloquent-relationships#many-to-many
        return $this->belongsToMany(Tag::class);
    } 
}
