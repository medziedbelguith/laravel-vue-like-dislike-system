<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

 
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{post_slug?}', [BlogController::class, 'blogDetail'])->name('blog');
 
Route::post('/like', [BlogController::class, 'fetchLike']);
Route::post('/like/{id}', [BlogController::class, 'handleLike']);
 
Route::post('/dislike', [BlogController::class, 'fetchDislike']);
Route::post('/dislike/{id}', [BlogController::class, 'handleDislike']);
