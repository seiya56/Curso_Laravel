<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UsersController::class, 'show'])->name('users.show');

Route::get('/', function () {
    return view('welcome');
});
