<?php

use App\Containers\ShopSection\CartProduct\UI\WEB\Controllers\StoreCartProductController;
use Illuminate\Support\Facades\Route;

Route::post('cart-products', StoreCartProductController::class)->middleware(['auth:web'])->name('cart-products.store');

