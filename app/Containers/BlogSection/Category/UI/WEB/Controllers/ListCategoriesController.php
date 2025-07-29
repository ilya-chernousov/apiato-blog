<?php

namespace App\Containers\BlogSection\Category\UI\WEB\Controllers;

use App\Containers\BlogSection\Category\Actions\ListCategoriesAction;
use App\Containers\BlogSection\Category\UI\WEB\Requests\ListCategoriesRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class ListCategoriesController extends WebController
{
    public function __invoke(ListCategoriesRequest $request, ListCategoriesAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
