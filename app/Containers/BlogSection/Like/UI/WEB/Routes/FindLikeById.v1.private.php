<?php

use App\Containers\BlogSection\Like\UI\WEB\Controllers\FindLikeByIdController;
use Illuminate\Support\Facades\Route;

Route::get('likes/{id}', FindLikeByIdController::class)
    ->middleware(['auth:web']);

