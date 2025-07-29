<?php

namespace App\Containers\BlogSection\Post\Actions;

use App\Containers\BlogSection\Post\Tasks\ListPostsTask;
use App\Containers\BlogSection\Post\UI\WEB\Requests\ListPostsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListPostsAction extends ParentAction
{
    public function __construct(
        private readonly ListPostsTask $listPostsTask,
    ) {
    }

    public function run(ListPostsRequest $request): mixed
    {
        return $this->listPostsTask->run();
    }
}
