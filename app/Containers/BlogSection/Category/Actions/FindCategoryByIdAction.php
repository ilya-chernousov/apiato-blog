<?php

namespace App\Containers\BlogSection\Category\Actions;

use App\Containers\BlogSection\Category\Models\Category;
use App\Containers\BlogSection\Category\Tasks\FindCategoryByIdTask;
use App\Containers\BlogSection\Category\UI\WEB\Requests\FindCategoryByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindCategoryByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindCategoryByIdTask $findCategoryByIdTask,
    ) {
    }

    public function run(FindCategoryByIdRequest $request): Category
    {
        return $this->findCategoryByIdTask->run($request->id);
    }
}
