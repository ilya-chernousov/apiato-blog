<?php

use App\Containers\BlogSection\Post\UI\WEB\Controllers\FindPostByIdController;
use Illuminate\Support\Facades\Route;

Route::get('/posts/{id}', FindPostByIdController::class)->name('posts.show');

