<?php

namespace App\Containers\ShopSection\CartProduct\UI\WEB\Controllers;

use App\Containers\ShopSection\CartProduct\Actions\GetCartResultsAction;
use App\Containers\ShopSection\CartProduct\Actions\ListCartProductsByUserId;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\View\View;

final class ListCartProductsController extends WebController
{
    public function __invoke(ListCartProductsByUserId $action, GetCartResultsAction $cartResultsAction): View
    {
        $cartProducts = $action->run(auth()->id());
        $cartResults = $cartResultsAction->run($cartProducts);

        return view('shopSection@cartProduct::index', compact('cartProducts', 'cartResults'));
    }
}
