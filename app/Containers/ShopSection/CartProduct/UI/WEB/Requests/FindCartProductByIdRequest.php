<?php

namespace App\Containers\ShopSection\CartProduct\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindCartProductByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
