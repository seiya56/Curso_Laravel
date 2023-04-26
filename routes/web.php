<?php

// use App\Http\Controllers\PaginaController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// Route::get('/blog', [PaginaController::class, 'index']);
// Route::get('/blog/banana', [PaginaController::class, 'banana']);
// Route::get('/blog/melancia', [PaginaController::class, 'melancia']);

Route::put('/users/{id}',[UsersController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit',[UsersController::class,'edit'])->name('users.edit');
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UsersController::class, 'show'])->name('users.show');
Route::get('/', function () {
    return view('welcome');
});
