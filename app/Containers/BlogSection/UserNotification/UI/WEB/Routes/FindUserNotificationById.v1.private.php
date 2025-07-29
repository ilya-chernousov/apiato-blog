<?php

use App\Containers\BlogSection\UserNotification\UI\WEB\Controllers\FindUserNotificationByIdController;
use Illuminate\Support\Facades\Route;

Route::get('user-notifications/{id}', FindUserNotificationByIdController::class)
    ->middleware(['auth:web']);

