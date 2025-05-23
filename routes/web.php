<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [pagesController::class, 'welcome'])->name('welcome');
Route::get('/about', [pagesController::class, 'about'])->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories. index');
Route::get('/product', [ProductController::class, 'productIndex'])->name('products.productIndex');
Route::get('/order',[OrderController::class,'OrderIndex'])->name('orders.orderIndex');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
