<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
   public function __construct()
   {
       $this -> middleware('auth.revisor');
       
   }

   public function index(){

       $article = Article::where('is_accepted', null)
       ->orderBy('created_at', 'ASC')
       ->first();

       return view('rev.revisor', compact ('article'));
   }
   
    private function setAccepted($article_id , $value){

        $article = Article::find($article_id);
        $article -> is_accepted = $value ;
        $article -> save();

        return redirect(route('rev.revisor'));
    }

   
   public function accept($article_id){
    
    return  $this->setAccepted($article_id, true);
   }

   public function reject($article_id){
       
    return  $this->setAccepted($article_id, false);
   }

//    cancellazzione definitiva
   
   public function trash(){

    $article = Article::where('is_accepted', false)
    ->orderBy('created_at', 'ASC')
    ->first();

    return view('rev.trash', compact ('article'));
}

   public function notaccept($article_id){

    return  $this->setAccepted($article_id, null);
    
   }

   public function destroy(Article $article){

    $article->images()->delete();

    $article->delete();

       return redirect(route('rev.trash'));
    }
}

