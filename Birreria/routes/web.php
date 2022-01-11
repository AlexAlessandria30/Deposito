<?php

use App\Http\Controllers\BreweryController;
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

Route::get('/',[PublicController::class, 'index'])->name('homepage');

Route::get('/inserisci-birreria',[BreweryController::class, 'create'])->name('brewery.create');

Route::post('/crea-birreria', [BreweryController::class, 'store'])->name('brewery.store');

Route::get('/dettaglio-birreria/{brewery}',[BreweryController::class, 'show'])->name('brewery.detail');

Route::get('/modifica-birreria/{brewery}', [BreweryController::class, 'edit'])->name('brewery.edit');

Route::put('/update-birreria/{brewery}', [BreweryController::class, 'update'])->name('brewery.update');

Route::delete('elimina-birreria/{brewery}', [BreweryController::class, 'destroy'])->name('brewery.delete');