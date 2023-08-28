<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\LocationController;

/**Para personajes */
Route::get('/characters', [CharacterController::class, 'index']);
Route::get('/characters/{id}', [CharacterController::class, 'show']);
Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');
Route::put('/characters/{id}', [CharacterController::class, 'update'])->name('characters.update');
Route::delete('/characters/{id}', [CharacterController::class, 'destroy'])->name('characters.destroy');
/**Para locations */
Route::get('/locations', [LocationController::class, 'index']);
/**Para episodes */
Route::get('/api/episodes', [EpisodeController::class, 'index']);