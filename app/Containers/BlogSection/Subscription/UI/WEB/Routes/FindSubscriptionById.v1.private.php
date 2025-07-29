<?php

use App\Containers\BlogSection\Subscription\UI\WEB\Controllers\FindSubscriptionByIdController;
use Illuminate\Support\Facades\Route;

Route::get('subscriptions/{id}', FindSubscriptionByIdController::class)
    ->middleware(['auth:web']);

