<?php

namespace App\Containers\BlogSection\Post\UI\WEB\Controllers;

use App\Containers\BlogSection\Category\Actions\ListCategoriesAction;
use App\Containers\BlogSection\Post\Actions\ListPostsAction;
use App\Containers\BlogSection\Post\UI\WEB\Requests\ListPostsRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\View\View;

final class ListPostsController extends WebController
{
    public function __invoke(ListPostsRequest $request, ListPostsAction $action, ListCategoriesAction $categoriesAction): View
    {
        $categories = $categoriesAction->run();
        return view('blogSection@post::index', compact('categories'));
        //        $action->run($request);
        //
        //        return back();
    }
}
