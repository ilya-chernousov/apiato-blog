<?php

use App\Containers\ShopSection\Product\UI\WEB\Controllers\ListProductsController;
use Illuminate\Support\Facades\Route;

Route::get('products', ListProductsController::class);

