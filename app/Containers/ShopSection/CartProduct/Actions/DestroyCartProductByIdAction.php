<?php

namespace App\Containers\ShopSection\CartProduct\Actions;

use App\Containers\ShopSection\CartProduct\Data\Repositories\CartProductRepository;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DestroyCartProductByIdAction extends ParentAction
{
    public function __construct(
        private readonly CartProductRepository $repository,
    ) {
    }

    public function run(int $id): bool
    {
        return $this->repository->delete($id);
    }
}
