<?php

use App\Containers\BlogSection\UserNotification\UI\WEB\Controllers\ListUserNotificationsController;
use Illuminate\Support\Facades\Route;

Route::get('user-notifications', ListUserNotificationsController::class)
    ->middleware(['auth:web']);

