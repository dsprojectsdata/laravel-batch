<?php

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\web\BlogController;
use App\Http\Controllers\web\HomeController;
use Illuminate\Support\Facades\Route;





Route::prefix('/')->group(function () {
      Route::get('/', [HomeController::class, 'index'])->name('homePage');
      Route::get('/blogs', [BlogController::class, 'index'])->name('blogIndex');
});


Route::prefix('admin')->name('admin.')->group(function () {

      Route::middleware('notLoginCheck')->group(function () {
            Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
            Route::post('/login', [AdminAuthController::class, 'loginVerify'])->name('loginVerify');
      });

      Route::middleware('loginCheck')->group(function () {
            Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');

            Route::controller(AdminBlogController::class)->group(function () {
                  Route::get('/blog-category', 'category')->name('blogCategory');
                  Route::post('/blog-category', 'blogCategorySave')->name('blogCategorySave');
                  Route::get('/blogs', 'blogIndex')->name('blogIndex');
                  Route::get('/blog-add', 'blogAdd')->name('blogAdd');
                  Route::post('/blog-save', 'blogSave')->name('blogSave');
                  Route::get('/blog-delete/{id}', 'blogDelete')->name('blogDelete');
            });
      });
});
