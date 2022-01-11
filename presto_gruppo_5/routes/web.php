<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/create', [ArticleController::class, 'create'])->name('article.create');

Route::post('/article-store',[ArticleController::class, 'store'])->name('article.store');

/* LANGUAGE */
Route::post('/locale/{locale}', [PublicController::class, 'locale'])->name('locale');

//caricamento img

Route::post('/article/images/upload',[ArticleController::class, 'storeImages'])->name('article.images');

Route::delete('/article/images/remove',[ArticleController::class, 'removeImages'])->name('article.images.remove');

Route::get('/article/image', [ArticleController::class, 'getImages'])->name('article.images.get');
// continua CRUD

Route::get('/article-detail/{article}',[ArticleController::class, 'show'])->name('article.show');

Route::get('/announcement',[PublicController::class, 'announcement'])->name('announcement');

Route::get('/article-category/{category_id}/annunci',[PublicController::class, 'thiscategory'])->name('article.type');

/* REVISOR */

Route::get('/revisor',[RevisorController::class, 'index'])->name('rev.revisor');

Route::post('/revisor/article/{id}/accept',[RevisorController::class,'accept'])->name('revisor.accept');

Route::post('/revisor/article/{id}/reject',[RevisorController::class,'reject'])->name('revisor.reject');

//ROTTA PER RICERCA FULL TEXT
Route::get('/search', [PublicController::class, 'search'])->name('article.search');

//ROTTA PER LAVORA CON NOI
Route::get('/lavora-con-noi', [MailController::class, 'workwithus'])->name('mail.workwithus');

Route::post('/lavora-con-noi/submit',[MailController::class,'store'])->name('mail.storework');

Route::get('/welcome',[MailController::class, 'thanks'])->name('grazie');

//TRASH

Route::get('/trash',[RevisorController::class, 'trash'])->name('rev.trash');

Route::post('/revisor/article/{id}/trash',[RevisorController::class,'notaccept'])->name('revisor.notaccept');

Route::delete('/destroy-article/{article}', [RevisorController::class,'destroy'])->name('revisor.destroy');

//I miei annunci
Route::get('/i-miei-annunci', [ArticleController::class, 'myarticles'])->name('myarticles');

//Elimina annuncio

Route::delete('/Article-delete/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');

