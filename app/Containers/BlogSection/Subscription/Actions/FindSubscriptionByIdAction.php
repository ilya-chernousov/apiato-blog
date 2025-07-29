<?php

namespace App\Containers\BlogSection\Subscription\Actions;

use App\Containers\BlogSection\Subscription\Models\Subscription;
use App\Containers\BlogSection\Subscription\Tasks\FindSubscriptionByIdTask;
use App\Containers\BlogSection\Subscription\UI\WEB\Requests\FindSubscriptionByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindSubscriptionByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindSubscriptionByIdTask $findSubscriptionByIdTask,
    ) {
    }

    public function run(FindSubscriptionByIdRequest $request): Subscription
    {
        return $this->findSubscriptionByIdTask->run($request->id);
    }
}
