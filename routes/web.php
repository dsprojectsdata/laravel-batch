<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'contact');

Route::get('/', [Home::class, 'index'])->name('home');
