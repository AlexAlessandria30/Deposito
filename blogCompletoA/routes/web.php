<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'index'])->name('homepage');

Route::get('/create', [ArticleController::class, 'create'])->name('article.create');

Route::post('/store', [ArticleController::class, 'store'])->name('article.store');

Route::get('/dettaglio/articolo/{article}', [ArticleController::class, 'show'])->name('article.detail');

Route::get('/modifica-articolo/{article}', [ArticleController::class, 'edit'])->name('article.edit');

Route::put('/modifica-articolo/{article}/update', [ArticleController::class, 'update'])->name('article.update');

Route::get('/miei-articoli', [ArticleController::class, 'user'])->name('article.user');

Route::delete('/elimina/{article}', [ArticleController::class, 'delete'])->name('article.delete');

Route::delete('/utente/{user}', [ArticleController::class, 'userDelete'])->name('user.delete');

Route::get('/allArticle',[PublicController::class, 'allArticle'])->name('allArticle');