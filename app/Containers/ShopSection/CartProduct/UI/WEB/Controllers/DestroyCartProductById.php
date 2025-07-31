<?php

namespace App\Containers\ShopSection\CartProduct\UI\WEB\Controllers;

use App\Containers\ShopSection\CartProduct\Actions\DeleteCartProductAction;
use App\Containers\ShopSection\CartProduct\UI\WEB\Requests\DeleteCartProductRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Http\RedirectResponse;

final class DestroyCartProductById extends WebController
{
    public function __invoke(DeleteCartProductRequest $request, DeleteCartProductAction $action): RedirectResponse
    {
        $action->run($request);

        return back();
    }
}
