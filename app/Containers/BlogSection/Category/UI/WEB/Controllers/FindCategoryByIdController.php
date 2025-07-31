<?php

namespace App\Containers\BlogSection\Category\UI\WEB\Controllers;

use App\Containers\BlogSection\Category\Actions\FindCategoryByIdAction;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\View\View;

final class FindCategoryByIdController extends WebController
{
    public function __invoke(int $id, FindCategoryByIdAction $action): View
    {
        $category = $action->run($id);
        return view('blogSection@category::show', compact('category'));
    }
}
