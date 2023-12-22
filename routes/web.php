<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\web\BlogController;
use App\Http\Controllers\web\HomeController;
use Illuminate\Support\Facades\Route;





Route::prefix('/')->group(function () {
      Route::get('/', [HomeController::class, 'index'])->name('homePage');
      Route::get('/blogs', [BlogController::class, 'index'])->name('blogIndex');
});


Route::prefix('admin')->group(function () {
      Route::get('/', [AdminHomeController::class, 'index'])->name('admin.dashboard');
});
