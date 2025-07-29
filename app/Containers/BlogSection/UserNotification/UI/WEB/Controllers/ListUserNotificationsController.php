<?php

namespace App\Containers\BlogSection\UserNotification\UI\WEB\Controllers;

use App\Containers\BlogSection\UserNotification\Actions\ListUserNotificationsAction;
use App\Containers\BlogSection\UserNotification\UI\WEB\Requests\ListUserNotificationsRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class ListUserNotificationsController extends WebController
{
    public function __invoke(ListUserNotificationsRequest $request, ListUserNotificationsAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
