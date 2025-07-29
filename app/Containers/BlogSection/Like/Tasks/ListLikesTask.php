<?php

namespace App\Containers\BlogSection\Like\Tasks;

use App\Containers\BlogSection\Like\Data\Repositories\LikeRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListLikesTask extends ParentTask
{
    public function __construct(
        private readonly LikeRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
