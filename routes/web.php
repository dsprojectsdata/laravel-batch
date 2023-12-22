<?php

use App\Http\Controllers\web\BlogController;
use App\Http\Controllers\web\HomeController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::get('/', [HomeController::class, 'index'])->name('homePage');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogIndex');
