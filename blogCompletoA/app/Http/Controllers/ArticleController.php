<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequests;
use Illuminate\Database\Eloquent\Model;

class ArticleController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
    
  }

   public function create(){

    return view('article.create');
   }

   public function store(ArticleRequests $req){
    
    // Article::create([
    //     'title'=>$req->title,
    //     'body'=>$req->body,
    //     'user_id'=>Auth::id(),
    //     'img'=>$req->file('img')->store('public/img')
    // ]);

    Auth::user()->articles()->create([
        'title'=>$req->title,
        'body'=>$req->body,
        'img'=>$req->file('img')->store('public/img')

    ]);
     return redirect(route('homepage'))->with('status', 'Articolo inserito correttamente');

   }

   public function show(Article $article){

    return view('article.detail', compact('article'));
   }

   public function edit(Article $article){
       return view('article.edit', compact('article'));
   }

   public function update(Request $req , Article $article ){

    if (Auth::id()=== $article->user->id) {
        
       $article->update([
       'title'=>$req->title,
        'body'=>$req->body,
        'img'=>$req->file('img')->store('public/img'),
       ]);
    }
       
    return redirect(route('article.detail', compact('article')))->with('status','Modifica effettuata');
   }

   public function user(){
       $articles = Auth::user()->articles()->get();

       return view('article.user' ,compact('articles'));

   }

   public function delete(Article $article){

    $article->delete();

    return redirect(route('homepage'))->with('status', 'Articolo eliminato');

   }

   public function userDelete(User $user){

      foreach ($user->articles as $article) {
     $article->user()->dissociate($user->id);
     $article->user()->associate(1);
     $article->save();
    }
    
    $user->delete();

    return redirect(route('homepage'));

   }

}
