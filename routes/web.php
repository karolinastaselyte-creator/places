<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContinentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware("guest");


Route::get('/places', function () {
    return view('places');
})->middleware("auth");


Route::get('/present', function () {
    return view('present');
})->middleware("auth");

Route::get('/past', function () {
    return view('past');
})->middleware("auth");

Route::get('/continent', [ContinentController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
