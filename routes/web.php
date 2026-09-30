<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'index'])
    ->name('profile.index');

Route::put('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');

Route::get('profile/{nama?}/{npm?}/{kelas?}', [ProfileController::class, 'index']);

Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');

Route::get('/user/create', [UserController::class, 'create'])
    ->name('users.create');

Route::post('/user', [UserController::class, 'store'])
    ->name('users.store');