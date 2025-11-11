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


//--------------NOT IN USE--------------
Route::get('/places', function () {
    return view('places');
})->middleware("auth");

Route::get('/present', function () {
    return view('present');
})->middleware("auth");

Route::get('/past', function () {
    return view('past');
})->middleware("auth");
//--------------------------------------

Route::get('/bookmark2', function () {
    return view('bookContinent2');
})->middleware("auth");

Route::get('/future', function () {
    return view('future');
})->middleware("auth");

Route::get('/bookmark', [BookmarkController::class, 'index'])->middleware("auth");

Route::get('/continent', [ContinentController::class, 'index']);

Route::get('/continent/{id}', [ContinentController::class, 'show']);

Route::get('/country/{id}', [CountryController::class, 'show']);

Route::get('/places/{id}', [PlaceController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
