<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/movies/genre/{genre}', [MovieController::class, 'showMoviesByGenre']);

Route::get('/movies/genre/{genre}', [MovieController::class, 'showMoviesByGenre']);
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/genre/{genre}', 'App\Http\Controllers\MovieController@showMoviesByGenre');
Route::get('/movies/genre/{genre}', 'App\Http\Controllers\MovieController@showMoviesByGenre');
// routes/web.php

Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');




// Rutas de la API
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::post('/movies', [MovieController::class, 'store']);
Route::put('/movies/{id}', [MovieController::class, 'update']);
Route::get('/movies/genre/{genre}', [MovieController::class, 'showMoviesByGenre']);
