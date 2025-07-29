<?php

use App\Containers\BlogSection\Category\UI\WEB\Controllers\ListCategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('categories', ListCategoriesController::class)
    ->middleware(['auth:web']);

