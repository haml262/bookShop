<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\MycartController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BooksController::class, 'home']);

Route::get('/home', [BooksController::class, 'mostrarLibros']);

Route::get('/mycart', [MycartController::class, 'mycart']);

//Route::get('/nav/services', [NavController::class, 'services']);

Route::get('/nav/about_us', [NavController::class, 'about_us']);

Route::get('/nav/contact_us', [NavController::class, 'contact_us']);

Route::get('/nav/blog', [NavController::class, 'blog']);

Route::get('/nav/{nav}', [NavController::class, 'nav']);

Route::get('/category/{menu}', [CategoryController::class, 'menu']);