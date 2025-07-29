<?php

namespace App\Containers\BlogSection\Category\Tasks;

use App\Containers\BlogSection\Category\Data\Repositories\CategoryRepository;
use App\Containers\BlogSection\Category\Models\Category;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindCategoryByIdTask extends ParentTask
{
    public function __construct(
        private readonly CategoryRepository $repository,
    ) {
    }

    public function run($id): Category
    {
        return $this->repository->findOrFail($id);
    }
}
