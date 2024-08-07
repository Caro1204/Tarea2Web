<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ApiController;

// Rutas de la API
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::post('/movies', [MovieController::class, 'store']);
Route::put('/movies/{id}', [MovieController::class, 'update']);
Route::get('/movies/genre/{genre}', [MovieController::class, 'showMoviesByGenre']);



Route::get('/suma/{num1}/{num2}', [ApiController::class, 'suma']);
Route::get('/mult/{num1}/{num2}', [ApiController::class, 'multiplicacion']);
