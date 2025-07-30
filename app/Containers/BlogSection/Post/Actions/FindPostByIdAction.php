<?php

namespace App\Containers\BlogSection\Post\Actions;

use App\Containers\BlogSection\Post\Data\Repositories\PostRepository;
use App\Containers\BlogSection\Post\Models\Post;
use App\Containers\BlogSection\Post\Tasks\FindPostByIdTask;
use App\Containers\BlogSection\Post\UI\WEB\Requests\FindPostByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindPostByIdAction extends ParentAction
{
    public function __construct(
        private readonly PostRepository $repository,
    ) {
    }

    public function run(int $id): Post
    {
        return $this->repository->findOrFail($id);
    }
}
