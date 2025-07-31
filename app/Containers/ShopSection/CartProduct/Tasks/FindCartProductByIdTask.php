<?php

namespace App\Containers\ShopSection\CartProduct\Tasks;

use App\Containers\ShopSection\CartProduct\Data\Repositories\CartProductRepository;
use App\Containers\ShopSection\CartProduct\Models\CartProduct;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindCartProductByIdTask extends ParentTask
{
    public function __construct(
        private readonly CartProductRepository $repository,
    ) {
    }

    public function run($id): CartProduct
    {
        return $this->repository->findOrFail($id);
    }
}
