<?php

use App\Http\Controllers\admin\Home;
use Illuminate\Support\Facades\Route;


// Route::view('/', 'welcome');

// Route::get(
//     '/test',
//     function () {
//         $x = 5;
//         $color =  ['red', 'blue', 'green'];

//         return view('test', ['color' => $color, 'x' => $x]);
//     }
// );


// Route::view('/home', 'home');
// Route::view('/contact', 'contact')->middleware('user_auth');

// Route::get('/', [Home::class, 'index'])->name('home')->middleware('user_auth');

// Route::post('/add-form', [Home::class, 'save'])->name('save')->middleware('user_auth');
Route::view('/contact', 'contact');

Route::prefix('admin')->middleware('user_auth')->group(function () {

      Route::get('/', [Home::class, 'index'])->name('home');

      Route::post('/add-form', [Home::class, 'save'])->name('save');

});
