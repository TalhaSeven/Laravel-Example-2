<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class,'index']);
Route::get('/home', [HomeController::class,'index']);

// Route::redirect('home','contact');

Route::get('/product', ProductController::class);

Route::resource('/blog', BlogController::class);

Route::get('/login', [LoginController::class,'login'])->name('login');

Route::post('/login', [LoginController::class,'loginpost'])->name('loginpost');

Route::get('/image', [ImageController::class,'show'])->name("show");

Route::post('/image', [ImageController::class,'uploadImage'])->name("uploadImage");



