<?php

namespace App\Containers\BlogSection\Subscription\Actions;

use App\Containers\BlogSection\Subscription\Tasks\ListSubscriptionsTask;
use App\Containers\BlogSection\Subscription\UI\WEB\Requests\ListSubscriptionsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListSubscriptionsAction extends ParentAction
{
    public function __construct(
        private readonly ListSubscriptionsTask $listSubscriptionsTask,
    ) {
    }

    public function run(ListSubscriptionsRequest $request): mixed
    {
        return $this->listSubscriptionsTask->run();
    }
}
