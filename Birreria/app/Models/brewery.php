<?php

namespace App\Models;

use App\Models\Beer;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class brewery extends Model
{
    use HasFactory;
    protected $fillable =[
       'name',
       'description',
       'img',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function beers(){
        return $this->belongsToMany(Beer::class);
    }
}
