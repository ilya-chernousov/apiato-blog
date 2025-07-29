<?php

namespace App\Containers\BlogSection\Post\Tasks;

use App\Containers\BlogSection\Post\Data\Repositories\PostRepository;
use App\Containers\BlogSection\Post\Models\Post;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindPostByIdTask extends ParentTask
{
    public function __construct(
        private readonly PostRepository $repository,
    ) {
    }

    public function run($id): Post
    {
        return $this->repository->findOrFail($id);
    }
}
