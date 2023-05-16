<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\Guest\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('homepage');
Route::get('/comics', [PageController::class, 'index'])->name('comics');
Route::get('/characters', [PageController::class, 'index'])->name('characters');
Route::get('/movies', [PageController::class, 'index'])->name('movies');
Route::get('/tv', [PageController::class, 'index'])->name('tv');
Route::get('/games', [PageController::class, 'index'])->name('games');
Route::get('/collectibles', [PageController::class, 'index'])->name('collectibles');
Route::get('/videos', [PageController::class, 'index'])->name('videos');
Route::get('/fans', [PageController::class, 'index'])->name('fans');
Route::get('/news', [PageController::class, 'index'])->name('news');
Route::get('/shop', [PageController::class, 'index'])->name('shop');


Route::resource('/comics', ComicController::class);