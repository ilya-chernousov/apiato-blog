<?php

namespace App\Containers\BlogSection\UserNotification\Tasks;

use App\Containers\BlogSection\UserNotification\Data\Repositories\UserNotificationRepository;
use App\Containers\BlogSection\UserNotification\Models\UserNotification;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindUserNotificationByIdTask extends ParentTask
{
    public function __construct(
        private readonly UserNotificationRepository $repository,
    ) {
    }

    public function run($id): UserNotification
    {
        return $this->repository->findOrFail($id);
    }
}
