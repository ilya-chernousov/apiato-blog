<?php

namespace App\Containers\ShopSection\CartProduct\Actions;

use App\Containers\ShopSection\CartProduct\Data\Repositories\CartProductRepository;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Support\Collection;

final class ListCartProductsByUserId extends ParentAction
{
    public function __construct(
        private readonly CartProductRepository $repository,
    ) {
    }

    public function run()
    {
        //        будет переделано
        //        $user = auth('web')->user();
        //        if (!$user) {
        //            collect();
        //        }
        //
        //        return $user->cartProducts;
    }
}
