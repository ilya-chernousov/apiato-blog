<?php

namespace App\Containers\ShopSection\CartProduct\UI\WEB\Controllers;

use App\Containers\ShopSection\CartProduct\Actions\UpdateCartProductByIdAction;
use App\Containers\ShopSection\CartProduct\Models\CartProduct;
use App\Containers\ShopSection\CartProduct\UI\WEB\Requests\CartProductRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class UpdateCartProductController extends WebController
{
    public function __invoke(CartProduct $cartProduct, CartProductRequest $request, UpdateCartProductByIdAction $action): RedirectResponse
    {
        if (
            $request->user('web')->cannot('update', $cartProduct)
            || $request->user('web')->cannot('changeCountCartProduct', $cartProduct)
        ) {
            abort(403);
        }
        $action->run($cartProduct->id, $request->getDTO());

        return back();
    }
}
