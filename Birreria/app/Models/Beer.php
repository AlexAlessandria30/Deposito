<?php

namespace App\Models;

use App\Models\brewery;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BreweryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beer extends Model
{
    use HasFactory;
    public function breweries(){
        return $this->belongsToMany(brewery::class);
    }
}
