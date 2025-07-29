<?php

namespace App\Containers\BlogSection\UserNotification\Actions;

use App\Containers\BlogSection\UserNotification\Tasks\ListUserNotificationsTask;
use App\Containers\BlogSection\UserNotification\UI\WEB\Requests\ListUserNotificationsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListUserNotificationsAction extends ParentAction
{
    public function __construct(
        private readonly ListUserNotificationsTask $listUserNotificationsTask,
    ) {
    }

    public function run(ListUserNotificationsRequest $request): mixed
    {
        return $this->listUserNotificationsTask->run();
    }
}
