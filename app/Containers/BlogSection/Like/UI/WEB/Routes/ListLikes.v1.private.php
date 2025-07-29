<?php

use App\Containers\BlogSection\Like\UI\WEB\Controllers\ListLikesController;
use Illuminate\Support\Facades\Route;

Route::get('likes', ListLikesController::class)
    ->middleware(['auth:web']);

