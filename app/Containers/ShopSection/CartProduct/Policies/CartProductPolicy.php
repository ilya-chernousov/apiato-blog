<?php

namespace App\Containers\ShopSection\CartProduct\Policies;

use App\Containers\AppSection\User\Models\User;
use App\Containers\ShopSection\CartProduct\Models\CartProduct;
use App\Ship\Parents\Policies\Policy as ParentPolicy;

final class CartProductPolicy extends ParentPolicy
{
    public function __construct()
    {
    }

    public function update(User $user, CartProduct $cartProduct)
    {
        return $user->id === $cartProduct->user_id;
    }

    public function changeCountCartProduct(User $user, CartProduct $cartProduct)
    {
        return $cartProduct->count < $cartProduct->product->count;
    }
}
