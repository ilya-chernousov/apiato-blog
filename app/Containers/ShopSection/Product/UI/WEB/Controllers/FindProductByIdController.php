<?php

namespace App\Containers\ShopSection\Product\UI\WEB\Controllers;

use App\Containers\ShopSection\Product\Actions\FindProductByIdAction;
use App\Containers\ShopSection\Product\UI\WEB\Requests\FindProductByIdRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class FindProductByIdController extends WebController
{
    public function __invoke(FindProductByIdRequest $request, FindProductByIdAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
