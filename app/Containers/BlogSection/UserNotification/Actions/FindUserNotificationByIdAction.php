<?php

namespace App\Containers\BlogSection\UserNotification\Actions;

use App\Containers\BlogSection\UserNotification\Models\UserNotification;
use App\Containers\BlogSection\UserNotification\Tasks\FindUserNotificationByIdTask;
use App\Containers\BlogSection\UserNotification\UI\WEB\Requests\FindUserNotificationByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindUserNotificationByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindUserNotificationByIdTask $findUserNotificationByIdTask,
    ) {
    }

    public function run(FindUserNotificationByIdRequest $request): UserNotification
    {
        return $this->findUserNotificationByIdTask->run($request->id);
    }
}
