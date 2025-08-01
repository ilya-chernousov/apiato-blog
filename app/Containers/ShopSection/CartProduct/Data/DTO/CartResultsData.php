<?php

namespace App\Containers\ShopSection\CartProduct\Data\DTO;

class CartResultsData
{
    public function __construct(
        public int $count,
        public float $totalSum,
    ) {
    }
}
