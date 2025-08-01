<?php

namespace App\Containers\ShopSection\Product\UI\WEB\Controllers;

use App\Containers\ShopSection\CartProduct\Actions\ListCartProductsByUserId;
use App\Containers\ShopSection\Product\Actions\ListProductsAction;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\View\View;

final class ListProductsController extends WebController
{
    public function __invoke(ListProductsAction $productsAction, ListCartProductsByUserId $cartProductsAction): View
    {
        $products = $productsAction->run();
        $cartProducts = $cartProductsAction->run(auth('web')->id());
        return view('shopSection@product::index', compact('products', 'cartProducts'));
    }
}
