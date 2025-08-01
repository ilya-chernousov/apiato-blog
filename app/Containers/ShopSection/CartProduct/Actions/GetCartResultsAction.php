<?php

namespace App\Containers\ShopSection\CartProduct\Actions;

use App\Containers\ShopSection\CartProduct\Data\DTO\CartResultsData;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Support\Collection;

final class GetCartResultsAction extends ParentAction
{
    public function run(Collection $cartProducts): CartResultsData
    {
        $countProducts = $cartProducts->sum('count');
        $sumProducts = 0;
        foreach ($cartProducts as $cartProduct) {
            $sumProducts += $cartProduct->product->price * $cartProduct->count;
        }

        return app()->make(CartResultsData::class, [
            'count' => (int) $countProducts,
            'totalSum' => (float) $sumProducts,
        ]);
    }
}
