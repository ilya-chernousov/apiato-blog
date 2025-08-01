<?php

use App\Containers\ShopSection\CartProduct\UI\WEB\Controllers\DestroyCartProductByIdController;
use Illuminate\Support\Facades\Route;

Route::delete('/cart-products/{cartProduct}', DestroyCartProductByIdController::class)
    ->middleware(['auth:web'])
    ->name('cart-products.destroy');

