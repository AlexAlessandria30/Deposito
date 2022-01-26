<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [ PublicController::class, 'index' ])
    ->name('home');

// https://laravel.com/docs/8.x/routing#route-parameters
Route::get('/tags/{tag}/{tag_id}', [ PublicController::class, 'photosByTag' ])
    ->name('photosByTag');

Route::post('/photos', [ PublicController::class, 'createPhoto' ])
    ->name('createPhoto');
