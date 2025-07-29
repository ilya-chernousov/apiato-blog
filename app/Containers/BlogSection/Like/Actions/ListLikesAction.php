<?php

namespace App\Containers\BlogSection\Like\Actions;

use App\Containers\BlogSection\Like\Tasks\ListLikesTask;
use App\Containers\BlogSection\Like\UI\WEB\Requests\ListLikesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListLikesAction extends ParentAction
{
    public function __construct(
        private readonly ListLikesTask $listLikesTask,
    ) {
    }

    public function run(ListLikesRequest $request): mixed
    {
        return $this->listLikesTask->run();
    }
}
