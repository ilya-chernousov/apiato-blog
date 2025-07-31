<?php

namespace App\Containers\ShopSection\CartProduct\Data\Repositories;

use App\Containers\ShopSection\CartProduct\Models\CartProduct;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of CartProduct
 *
 * @extends ParentRepository<TModel>
 */
final class CartProductRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
