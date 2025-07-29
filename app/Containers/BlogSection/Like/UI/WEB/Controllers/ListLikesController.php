<?php

namespace App\Containers\BlogSection\Like\UI\WEB\Controllers;

use App\Containers\BlogSection\Like\Actions\ListLikesAction;
use App\Containers\BlogSection\Like\UI\WEB\Requests\ListLikesRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class ListLikesController extends WebController
{
    public function __invoke(ListLikesRequest $request, ListLikesAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
