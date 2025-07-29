<?php

namespace App\Containers\BlogSection\Like\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindLikeByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
