<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [RegisterController::class, 'store'])->name('register');

/** Resumimos los 5 métodos de un api con la siguiente instrucción */
Route::apiResource('categories', CategoryController::class)->names(['categories']);
