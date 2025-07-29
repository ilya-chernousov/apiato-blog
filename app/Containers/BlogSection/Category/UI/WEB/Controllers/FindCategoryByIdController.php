<?php

namespace App\Containers\BlogSection\Category\UI\WEB\Controllers;

use App\Containers\BlogSection\Category\Actions\FindCategoryByIdAction;
use App\Containers\BlogSection\Category\UI\WEB\Requests\FindCategoryByIdRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class FindCategoryByIdController extends WebController
{
    public function __invoke(FindCategoryByIdRequest $request, FindCategoryByIdAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
