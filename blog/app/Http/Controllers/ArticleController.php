<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::all();
        return view('welcome',compact('articles'));
    }

   public function create(){

    return view('article.create');
   }

   public function store(Request $req){
    //    dd($req->all());
    Article::create([
        'title'=>$req->title,
        'body'=>$req->body,
        'author'=>$req->author,
        'img'=>$req->file('img')->store('public/img'),
    ]);
     return redirect(route('homepage'))->with('status', 'articolo inserito correttamente');

   }

   public function detail(Article $article){

    // $article = Article::where('title',$title)->first();//invece di restituire la collezione restituisce l'articolo che ha quel titolo
    
    //   $article = Article::find($id); //buono

    return view('article.detail', compact('article'));
   }

}
