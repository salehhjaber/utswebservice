<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Post Routes
Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/{id}', [PostController::class, 'show'])->name('show');
});

// About Route
Route::get('/about', [AboutController::class, 'index'])->name('about');
