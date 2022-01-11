<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){

        $articles=Article::where('is_accepted',true) -> with('user')->orderBy('created_at', 'DESC')->take(5)->get();

        return view('welcome', compact('articles'));
    }


    public function __construct()
    {
        $this->middleware('auth')->except('homepage', 'locale');
    }


    public function announcement(){

         $articles= Article::where('is_accepted',true) -> with('user')->orderBy('created_at', 'DESC')->get();
         $categories = Category::all();

         return view('announcement', compact('articles', 'categories'));
    }

    public function thiscategory($category_id){
        
        
         $category = Category::find($category_id);
         $articles = $category -> articles()-> where('is_accepted',true)->orderBy('created_at', 'desc')->paginate(10);

         return view('article.type', compact('articles', 'category'));
    }

    //funzione per ricerca full text
    public function search(Request $request){
        $q = $request->input('q');

        $articles = Article::search($q)->where('is_accepted', true)->get();

        return view('article.search', compact('q', 'articles'));
    }

    public function locale($locale){
        session()->put('locale', $locale);
        return redirect()->back();
    }
    

}
