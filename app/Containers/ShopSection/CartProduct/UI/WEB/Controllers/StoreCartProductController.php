<?php

namespace App\Containers\ShopSection\CartProduct\UI\WEB\Controllers;

use App\Containers\ShopSection\CartProduct\Actions\StoreCartProductAction;
use App\Containers\ShopSection\CartProduct\UI\WEB\Requests\StoreCartProductRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class StoreCartProductController extends WebController
{
    public function __invoke(StoreCartProductRequest $request, StoreCartProductAction $action): RedirectResponse
    {
        $data = $request->getDTO();
        $product = $action->run($data);
        return back();
    }
}
