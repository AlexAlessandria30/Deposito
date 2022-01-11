<?php

namespace App\Http\Controllers;

use App\Models\brewery;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){

        $breweries = brewery::with('user')->orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('breweries'));
    }

}
