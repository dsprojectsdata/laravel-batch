<?php

use App\Http\Controllers\web\HomeController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::get('/', [HomeController::class, 'home'])->name('home');
