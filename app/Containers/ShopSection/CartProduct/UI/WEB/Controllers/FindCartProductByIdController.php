<?php

namespace App\Containers\ShopSection\CartProduct\UI\WEB\Controllers;

use App\Containers\ShopSection\CartProduct\Actions\FindCartProductByIdAction;
use App\Containers\ShopSection\CartProduct\UI\WEB\Requests\FindCartProductByIdRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class FindCartProductByIdController extends WebController
{
    public function __invoke(FindCartProductByIdRequest $request, FindCartProductByIdAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
