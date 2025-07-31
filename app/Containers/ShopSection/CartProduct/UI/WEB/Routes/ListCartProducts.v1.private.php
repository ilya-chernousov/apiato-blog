<?php

use App\Containers\ShopSection\CartProduct\UI\WEB\Controllers\ListCartProductsController;
use Illuminate\Support\Facades\Route;

Route::get('cart-products', ListCartProductsController::class)
    ->middleware(['auth:web']);

