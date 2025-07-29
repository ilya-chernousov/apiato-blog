<?php

namespace App\Containers\BlogSection\UserNotification\Tasks;

use App\Containers\BlogSection\UserNotification\Data\Repositories\UserNotificationRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListUserNotificationsTask extends ParentTask
{
    public function __construct(
        private readonly UserNotificationRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
