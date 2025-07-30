<?php

use App\Containers\AppSection\Media\UI\WEB\Controllers\ListMediaController;
use Illuminate\Support\Facades\Route;

Route::get('media', ListMediaController::class)
    ->middleware(['auth:web']);

