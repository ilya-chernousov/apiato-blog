<?php

namespace App\Containers\ShopSection\Product\Tasks;

use App\Containers\ShopSection\Product\Data\Repositories\ProductRepository;
use App\Containers\ShopSection\Product\Models\Product;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindProductByIdTask extends ParentTask
{
    public function __construct(
        private readonly ProductRepository $repository,
    ) {
    }

    public function run($id): Product
    {
        return $this->repository->findOrFail($id);
    }
}
