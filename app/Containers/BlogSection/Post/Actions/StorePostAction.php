<?php

namespace App\Containers\BlogSection\Post\Actions;

use App\Containers\BlogSection\Post\Data\DTO\PostData;
use App\Containers\BlogSection\Post\Data\Repositories\PostRepository;
use App\Containers\BlogSection\Post\Models\Post;
use App\Ship\Parents\Actions\Action as ParentAction;

final class StorePostAction extends ParentAction
{
    public function __construct(
        private readonly PostRepository $postRepository,
    ) {
    }

    public function run(PostData $data): Post
    {
        return $this->postRepository->create($data);
    }
}
