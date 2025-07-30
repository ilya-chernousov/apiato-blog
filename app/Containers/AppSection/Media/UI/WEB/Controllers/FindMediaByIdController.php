<?php

namespace App\Containers\AppSection\Media\UI\WEB\Controllers;

use App\Containers\AppSection\Media\Actions\FindMediaByIdAction;
use App\Containers\AppSection\Media\UI\WEB\Requests\FindMediaByIdRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class FindMediaByIdController extends WebController
{
    public function __invoke(FindMediaByIdRequest $request, FindMediaByIdAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
