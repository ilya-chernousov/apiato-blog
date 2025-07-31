<?php

namespace App\Containers\BlogSection\Category\Actions;

use App\Containers\BlogSection\Category\Data\Repositories\CategoryRepository;
use App\Containers\BlogSection\Category\Models\Category;
use App\Containers\BlogSection\Category\Tasks\FindCategoryByIdTask;
use App\Containers\BlogSection\Category\UI\WEB\Requests\FindCategoryByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindCategoryByIdAction extends ParentAction
{
    public function __construct(
        private readonly CategoryRepository $repository,
    ) {
    }

    public function run(int $id): Category
    {
        return $this->repository->with('posts.user')->findOrFail($id);
    }
}
