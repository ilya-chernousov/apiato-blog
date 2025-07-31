<?php

namespace App\Containers\ShopSection\Product\Actions;

use App\Containers\ShopSection\Product\Models\Product;
use App\Containers\ShopSection\Product\Tasks\FindProductByIdTask;
use App\Containers\ShopSection\Product\UI\WEB\Requests\FindProductByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindProductByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindProductByIdTask $findProductByIdTask,
    ) {
    }

    public function run(FindProductByIdRequest $request): Product
    {
        return $this->findProductByIdTask->run($request->id);
    }
}
