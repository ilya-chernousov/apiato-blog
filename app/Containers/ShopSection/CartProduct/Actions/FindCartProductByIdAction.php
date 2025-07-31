<?php

namespace App\Containers\ShopSection\CartProduct\Actions;

use App\Containers\ShopSection\CartProduct\Models\CartProduct;
use App\Containers\ShopSection\CartProduct\Tasks\FindCartProductByIdTask;
use App\Containers\ShopSection\CartProduct\UI\WEB\Requests\FindCartProductByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindCartProductByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindCartProductByIdTask $findCartProductByIdTask,
    ) {
    }

    public function run(FindCartProductByIdRequest $request): CartProduct
    {
        return $this->findCartProductByIdTask->run($request->id);
    }
}
