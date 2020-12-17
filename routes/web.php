<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MovieController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/movies', [MovieController::class, 'index'])->name('movies.movies');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies/create', [MovieController::class, 'store']);
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.movie');

Route::post('/movies/{movie}/comments', [CommentController::class, 'store'])->name('comments.store');
