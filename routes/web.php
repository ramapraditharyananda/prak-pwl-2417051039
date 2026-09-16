<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('profile', [ProfileController::class, 'index']);
Route::get('profile/{nama?}/{npm?}/{kelas?}', [ProfileController::class, 'index']);
