<?php

use App\Http\Controllers\Formcontroller;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController :: class,"Homepage"])->name('home');

Route::get('/chiSiamo', [PublicController :: class,"persone"])->name('noi');

Route::get('/Articol', [PublicController :: class,"articolo"])->name('articoli');

Route::get('/visualpage/{title}', [PublicController :: class,"visual"])->name('visuale');

Route::get('/',[Formcontroller::class, 'form'])->name('home');

Route::post('//submit',[Formcontroller::class,'store'])->name('store');

Route::get('/grazie',[Formcontroller::class, 'thanks'])->name('grazie');
