<?php

namespace App\Containers\ShopSection\CartProduct\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListCartProductsRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
