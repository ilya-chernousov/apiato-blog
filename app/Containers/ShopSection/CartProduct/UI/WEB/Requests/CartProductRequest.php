<?php

namespace App\Containers\ShopSection\CartProduct\UI\WEB\Requests;

use App\Containers\ShopSection\CartProduct\Data\DTO\CartProductData;
use App\Ship\Parents\Requests\Request as ParentRequest;
use App\Ship\Traits\HasDTO;

final class CartProductRequest extends ParentRequest
{
    use HasDTO;
    protected array $decode = [];

    public function rules(): array
    {
        return [
            'product_id' => ['required', 'numeric', 'exists:products,id'],
            'count' => ['required', 'numeric', 'min:0'],
        ];
    }

    protected function getDtoClass(): string
    {
        return CartProductData::class;
    }
}
