<?php

namespace App\Containers\BlogSection\UserNotification\UI\WEB\Controllers;

use App\Containers\BlogSection\UserNotification\Actions\FindUserNotificationByIdAction;
use App\Containers\BlogSection\UserNotification\UI\WEB\Requests\FindUserNotificationByIdRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class FindUserNotificationByIdController extends WebController
{
    public function __invoke(FindUserNotificationByIdRequest $request, FindUserNotificationByIdAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
