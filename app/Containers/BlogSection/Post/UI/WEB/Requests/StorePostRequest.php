<?php

namespace App\Containers\BlogSection\Post\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class StorePostRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
