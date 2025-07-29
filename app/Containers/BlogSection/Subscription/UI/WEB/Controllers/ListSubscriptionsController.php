<?php

namespace App\Containers\BlogSection\Subscription\UI\WEB\Controllers;

use App\Containers\BlogSection\Subscription\Actions\ListSubscriptionsAction;
use App\Containers\BlogSection\Subscription\UI\WEB\Requests\ListSubscriptionsRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class ListSubscriptionsController extends WebController
{
    public function __invoke(ListSubscriptionsRequest $request, ListSubscriptionsAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
