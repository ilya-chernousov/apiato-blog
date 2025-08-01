<?php

use App\Containers\ShopSection\CartProduct\UI\WEB\Controllers\UpdateCartProductController;
use Illuminate\Support\Facades\Route;

Route::patch('cart-products/{cartProduct}', UpdateCartProductController::class)
    ->middleware(['auth:web'])
    ->name('cart-products.update');

