<?php

use App\Containers\AppSection\Media\UI\WEB\Controllers\FindMediaByIdController;
use Illuminate\Support\Facades\Route;

Route::get('media/{id}', FindMediaByIdController::class)
    ->middleware(['auth:web']);

