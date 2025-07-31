<?php

use App\Containers\ShopSection\CartProduct\UI\WEB\Controllers\FindCartProductByIdController;
use Illuminate\Support\Facades\Route;

Route::get('cart-products/{id}', FindCartProductByIdController::class)
    ->middleware(['auth:web']);

