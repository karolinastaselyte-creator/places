<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContinentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PlaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware("guest");

Route::get('/bookmark', [BookmarkController::class, 'index'])->middleware("auth")->name('bookmark');
Route::post('bookmark/{id}', [BookmarkController::class, 'store'])->middleware("auth");

Route::get('/continent', [ContinentController::class, 'index'])->middleware("auth");
Route::get('/continent/{id}', [ContinentController::class, 'show'])->middleware("auth");

Route::get('/country/{id}', [CountryController::class, 'show'])->middleware("auth");

Route::get('/place/{id}', [PlaceController::class, 'show'])->middleware("auth");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
