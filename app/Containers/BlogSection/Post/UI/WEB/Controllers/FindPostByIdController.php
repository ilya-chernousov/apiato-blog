<?php

namespace App\Containers\BlogSection\Post\UI\WEB\Controllers;

use App\Containers\BlogSection\Post\Actions\FindPostByIdAction;
use App\Containers\BlogSection\Post\UI\WEB\Requests\FindPostByIdRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class FindPostByIdController extends WebController
{
    public function __invoke(FindPostByIdRequest $request, FindPostByIdAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
