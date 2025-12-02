<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index'])->name('inici');

Route::resource('posts', PostController::class)->only(['index', 'show', 'create', 'edit']);

Route::get('/sobreMi', [HomeController::class, 'about'])->name('SobreMi');
