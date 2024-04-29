<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

// Route::get('/cart', 'CartController@index')->name('cart.index');
// Route::post('/cart/add', 'CartController@add')->name('cart.add');
// Route::post('/cart/remove', 'CartController@remove')->name('cart.remove');

$router->get('/cart', 'CartController@getCart');
$router->get('/cart/quantity/{burger_id}', 'CartController@getTotalQuantity');
$router->get('/', function () use ($router){
    return $router->app->version();
});

// Route::get('/cart', [CartController::class, 'cart'])->name('cart');
