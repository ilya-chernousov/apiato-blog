<?php

namespace App\Containers\BlogSection\Category\Actions;

use App\Containers\BlogSection\Category\Data\Repositories\CategoryRepository;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Support\Collection;

final class ListCategoriesAction extends ParentAction
{
    public function __construct(
        private readonly CategoryRepository $repository,
    ) {
    }

    public function run(): Collection // ListCategoriesRequest $request
    {
        return $this->repository->all();
    }
}
