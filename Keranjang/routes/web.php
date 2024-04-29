<?php

use Illuminate\Support\Facades\Route;

Route::get('/cart', [CartController::class, 'cart'])->name('cart');