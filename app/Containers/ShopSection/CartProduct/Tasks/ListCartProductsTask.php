<?php

namespace App\Containers\ShopSection\CartProduct\Tasks;

use App\Containers\ShopSection\CartProduct\Data\Repositories\CartProductRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListCartProductsTask extends ParentTask
{
    public function __construct(
        private readonly CartProductRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
