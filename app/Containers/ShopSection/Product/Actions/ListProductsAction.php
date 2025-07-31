<?php

namespace App\Containers\ShopSection\Product\Actions;

use App\Containers\ShopSection\Product\Data\Repositories\ProductRepository;
use App\Containers\ShopSection\Product\Tasks\ListProductsTask;
use App\Containers\ShopSection\Product\UI\WEB\Requests\ListProductsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListProductsAction extends ParentAction
{
    public function __construct(
        private readonly ProductRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->paginate(15);
    }
}
