<?php

namespace App\Containers\BlogSection\Category\Actions;

use App\Containers\BlogSection\Category\Models\Category;
use App\Containers\BlogSection\Category\Tasks\ListCategoriesTask;
use App\Containers\BlogSection\Category\UI\WEB\Requests\ListCategoriesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListCategoriesAction extends ParentAction
{
//    public function __construct(
//        private readonly ListCategoriesTask $listCategoriesTask,
//    ) {
//    }

    public function run(): mixed // ListCategoriesRequest $request
    {
        return Category::all();
    }
}
