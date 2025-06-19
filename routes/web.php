<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [App\Http\Controllers\ProductController::class,'index'])->name('products.index');

Route::get('/product/create', [App\Http\Controllers\ProductController::class,'create'])->name('products.create');

Route::get('/product', [App\Http\Controllers\ProductController::class,'store'])->name('products.store');

