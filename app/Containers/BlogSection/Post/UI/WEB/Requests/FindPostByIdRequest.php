<?php

namespace App\Containers\BlogSection\Post\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindPostByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
