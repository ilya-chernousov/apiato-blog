<?php

namespace App\Containers\BlogSection\Subscription\Tasks;

use App\Containers\BlogSection\Subscription\Data\Repositories\SubscriptionRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListSubscriptionsTask extends ParentTask
{
    public function __construct(
        private readonly SubscriptionRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
