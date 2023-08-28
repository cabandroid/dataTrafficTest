<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\LocationController;

Route::redirect('/', '/character');
/**Para personsajes */
Route::get('/character', function () {
    return view('characters.index');
})->name('characters.index');
Route::resource('character', CharacterController::class);
Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');
Route::delete('/characters/{id}', [CharacterController::class, 'destroy'])->name('characters.destroy');
Route::get('/characters/{id}/edit', [CharacterController::class, 'edit'])->name('characters.edit');

/**Para locations */
Route::get('/location', [LocationController::class, 'index'])->name('locations.index');

/**Para episodes */
Route::get('/episode', [EpisodeController::class, 'index'])->name('episodes.index');