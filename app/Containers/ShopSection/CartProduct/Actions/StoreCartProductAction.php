<?php

namespace App\Containers\ShopSection\CartProduct\Actions;

use App\Containers\ShopSection\CartProduct\Data\DTO\CartProductData;
use App\Containers\ShopSection\CartProduct\Data\Repositories\CartProductRepository;
use App\Containers\ShopSection\CartProduct\Models\CartProduct;
use App\Ship\Parents\Actions\Action as ParentAction;

final class StoreCartProductAction extends ParentAction
{
    public function __construct(
        private readonly CartProductRepository $repository,
    ) {
    }

    public function run(CartProductData $data): CartProduct
    {
        return $this->repository->create($data->toArray());
    }
}
