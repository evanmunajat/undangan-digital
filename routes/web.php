<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CommentController;



// Route untuk halaman index
Route::get('/', function () {
    return view('index'); // Pastikan Anda memiliki file view 'index.blade.php' di folder resources/views
})->name('index');

// Route untuk halaman home
Route::get('/home', function () {
    return view('home'); // Pastikan Anda memiliki file view 'home.blade.php' di folder resources/views
})->name('home');





Route::get('/home', [CommentController::class, 'index'])->name('home');
Route::post('/send-comment', [CommentController::class, 'store'])->name('send.comment');
