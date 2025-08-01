<?php

namespace App\Containers\ShopSection\CartProduct\UI\WEB\Controllers;

use App\Containers\ShopSection\CartProduct\Actions\DestroyCartProductByIdAction;
use App\Containers\ShopSection\CartProduct\Models\CartProduct;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class DestroyCartProductByIdController extends WebController
{
    public function __invoke(CartProduct $cartProduct, DestroyCartProductByIdAction $action): RedirectResponse
    {
        $action->run($cartProduct->id);
        return back();
    }
}
