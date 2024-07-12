<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/cart/add/{id}/{quantity}', [CartController::class, 'add']);
Route::post('/cart/update/{id}', [CartController::class, 'update']);
Route::get('/cart/remove/{id}', [CartController::class, 'remove']);
Route::post('/cart/checkout', [CartController::class, 'checkout']);

