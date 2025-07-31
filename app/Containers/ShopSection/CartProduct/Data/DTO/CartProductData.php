<?php

namespace App\Containers\ShopSection\CartProduct\Data\DTO;

use Spatie\LaravelData\Attributes\FromAuthenticatedUserProperty;
use Spatie\LaravelData\Data;

class CartProductData extends Data
{
    public function __construct(
        public int $product_id,
        public int $count,
        #[FromAuthenticatedUserProperty('web', 'id')]
        public int $user_id,
    ) {
    }
}
