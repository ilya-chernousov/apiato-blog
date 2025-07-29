<?php

namespace App\Containers\BlogSection\Like\UI\WEB\Controllers;

use App\Containers\BlogSection\Like\Actions\FindLikeByIdAction;
use App\Containers\BlogSection\Like\UI\WEB\Requests\FindLikeByIdRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class FindLikeByIdController extends WebController
{
    public function __invoke(FindLikeByIdRequest $request, FindLikeByIdAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
