<?php

namespace App\Containers\ShopSection\Product\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListProductsRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
