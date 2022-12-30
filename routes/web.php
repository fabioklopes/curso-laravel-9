<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\QuemSomosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/quemsomos', [QuemSomosController::class, 'index'])->name('quemsomos.index');
Route::get('contato', [ContatoController::class, 'index'])->name('contato');

Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/', function () {
    return view('welcome');
});


