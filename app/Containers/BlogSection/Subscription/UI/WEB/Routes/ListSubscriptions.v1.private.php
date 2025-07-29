<?php

use App\Containers\BlogSection\Subscription\UI\WEB\Controllers\ListSubscriptionsController;
use Illuminate\Support\Facades\Route;

Route::get('subscriptions', ListSubscriptionsController::class)
    ->middleware(['auth:web']);

