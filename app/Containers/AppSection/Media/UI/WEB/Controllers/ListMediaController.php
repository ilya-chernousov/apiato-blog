<?php

namespace App\Containers\AppSection\Media\UI\WEB\Controllers;

use App\Containers\AppSection\Media\Actions\ListMediaAction;
use App\Containers\AppSection\Media\UI\WEB\Requests\ListMediaRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class ListMediaController extends WebController
{
    public function __invoke(ListMediaRequest $request, ListMediaAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
