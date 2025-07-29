<?php

namespace App\Containers\BlogSection\Like\Actions;

use App\Containers\BlogSection\Like\Models\Like;
use App\Containers\BlogSection\Like\Tasks\FindLikeByIdTask;
use App\Containers\BlogSection\Like\UI\WEB\Requests\FindLikeByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindLikeByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindLikeByIdTask $findLikeByIdTask,
    ) {
    }

    public function run(FindLikeByIdRequest $request): Like
    {
        return $this->findLikeByIdTask->run($request->id);
    }
}
