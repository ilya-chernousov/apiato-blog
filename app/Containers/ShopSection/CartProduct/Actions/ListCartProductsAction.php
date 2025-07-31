<?php

namespace App\Containers\ShopSection\CartProduct\Actions;

use App\Containers\ShopSection\CartProduct\Tasks\ListCartProductsTask;
use App\Containers\ShopSection\CartProduct\UI\WEB\Requests\ListCartProductsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListCartProductsAction extends ParentAction
{
    public function __construct(
        private readonly ListCartProductsTask $listCartProductsTask,
    ) {
    }

    public function run(ListCartProductsRequest $request): mixed
    {
        return $this->listCartProductsTask->run();
    }
}
