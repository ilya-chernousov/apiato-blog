<?php

namespace App\Containers\ShopSection\CartProduct\UI\WEB\Controllers;

use App\Containers\ShopSection\CartProduct\Actions\ListCartProductsAction;
use App\Containers\ShopSection\CartProduct\UI\WEB\Requests\ListCartProductsRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class ListCartProductsController extends WebController
{
    public function __invoke(ListCartProductsRequest $request, ListCartProductsAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
