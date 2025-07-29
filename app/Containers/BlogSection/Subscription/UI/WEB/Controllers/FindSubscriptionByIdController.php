<?php

namespace App\Containers\BlogSection\Subscription\UI\WEB\Controllers;

use App\Containers\BlogSection\Subscription\Actions\FindSubscriptionByIdAction;
use App\Containers\BlogSection\Subscription\UI\WEB\Requests\FindSubscriptionByIdRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class FindSubscriptionByIdController extends WebController
{
    public function __invoke(FindSubscriptionByIdRequest $request, FindSubscriptionByIdAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
