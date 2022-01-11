<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){

        $articles = Article::orderByDesc('created_at')->take(3)->get();
        return view('welcome',compact('articles'));

    }
    
    public function allArticle(){
        $articles = Article::all();
        return view('allArticle' ,compact('articles'));

    }
}
