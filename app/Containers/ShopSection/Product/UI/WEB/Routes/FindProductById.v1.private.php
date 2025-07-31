<?php

use App\Containers\ShopSection\Product\UI\WEB\Controllers\FindProductByIdController;
use Illuminate\Support\Facades\Route;

Route::get('products/{id}', FindProductByIdController::class)
    ->middleware(['auth:web']);

