<?php

namespace App\Containers\BlogSection\Subscription\Tasks;

use App\Containers\BlogSection\Subscription\Data\Repositories\SubscriptionRepository;
use App\Containers\BlogSection\Subscription\Models\Subscription;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindSubscriptionByIdTask extends ParentTask
{
    public function __construct(
        private readonly SubscriptionRepository $repository,
    ) {
    }

    public function run($id): Subscription
    {
        return $this->repository->findOrFail($id);
    }
}
