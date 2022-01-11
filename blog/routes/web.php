<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[ArticleController::class, 'index'])->name('homepage');

Route::get('/create',[ArticleController::class,'create'])->name('article.create');                    

Route::post('/store',[ArticleController::class, 'store'])->name('article.store');

Route::get('/dettaglio/articolo/{article}', [ArticleController::class, 'detail'])->name('article.detail');


