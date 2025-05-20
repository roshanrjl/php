<?php

use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/',[pagesController::class,'welcome']);
Route::get('/about',[pagesController::class,'about']);