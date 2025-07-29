<?php

namespace App\Containers\BlogSection\Like\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class StoreLikeRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
