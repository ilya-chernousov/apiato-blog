<?php

namespace App\Containers\BlogSection\Post\Actions;

use App\Containers\BlogSection\Post\Data\Repositories\PostRepository;
use App\Containers\BlogSection\Post\UI\WEB\Requests\ListPostsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListPostsAction extends ParentAction
{
    public function __construct(
        private readonly PostRepository $repository,
    ) {
    }

    public function run(): mixed // ListPostsRequest $request
    {
        //        return $this->repository->with('user')->addRequestCriteria()->paginate();
        return $this->repository->with('user')->paginate(20);
    }
}
