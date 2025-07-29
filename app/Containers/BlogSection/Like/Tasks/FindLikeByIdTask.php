<?php

namespace App\Containers\BlogSection\Like\Tasks;

use App\Containers\BlogSection\Like\Data\Repositories\LikeRepository;
use App\Containers\BlogSection\Like\Models\Like;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindLikeByIdTask extends ParentTask
{
    public function __construct(
        private readonly LikeRepository $repository,
    ) {
    }

    public function run($id): Like
    {
        return $this->repository->findOrFail($id);
    }
}
