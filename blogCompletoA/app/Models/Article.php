<?php

namespace App\Models;

use App\Models\tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'img',
       

    ];
    public function user(){

     return $this->belongsTo(User::class);

    }

    public function tags() { 
        return $this->belongsToMany(tag::class);
    }
}
