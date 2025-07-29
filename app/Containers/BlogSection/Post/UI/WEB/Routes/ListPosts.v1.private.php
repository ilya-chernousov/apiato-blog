<?php

use App\Containers\BlogSection\Post\UI\WEB\Controllers\ListPostsController;
use Illuminate\Support\Facades\Route;

//Route::get('posts', ListPostsController::class)
//    ->middleware(['auth:web']);

//Route::get('posts', ListPostsController::class);

Route::get('/', ListPostsController::class);


