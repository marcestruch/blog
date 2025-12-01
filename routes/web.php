<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index'])->name('inici');

Route::get('/posts', [PostController::class, 'index'])->name('posts_llistat');

Route::get('/posts/{id}', [PostController::class, 'show'])
    ->where('id', '[0-9]+')
    ->name('posts_fitxa');

Route::get('/sobreMi', [HomeController::class, 'about'])->name('SobreMi');
