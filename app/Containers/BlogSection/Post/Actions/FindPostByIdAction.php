<?php

namespace App\Containers\BlogSection\Post\Actions;

use App\Containers\BlogSection\Post\Models\Post;
use App\Containers\BlogSection\Post\Tasks\FindPostByIdTask;
use App\Containers\BlogSection\Post\UI\WEB\Requests\FindPostByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindPostByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindPostByIdTask $findPostByIdTask,
    ) {
    }

    public function run(FindPostByIdRequest $request): Post
    {
        return $this->findPostByIdTask->run($request->id);
    }
}
