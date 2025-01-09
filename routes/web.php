<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

//Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/gallery', [\App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');

Route::resource('services', ServiceController::class);
