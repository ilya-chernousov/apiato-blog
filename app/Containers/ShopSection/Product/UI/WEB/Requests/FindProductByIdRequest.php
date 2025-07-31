<?php

namespace App\Containers\ShopSection\Product\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindProductByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
