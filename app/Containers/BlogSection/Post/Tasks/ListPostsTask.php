<?php

namespace App\Containers\BlogSection\Post\Tasks;

use App\Containers\BlogSection\Post\Data\Repositories\PostRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListPostsTask extends ParentTask
{
    public function __construct(
        private readonly PostRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
