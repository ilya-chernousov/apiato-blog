<?php

namespace App\Containers\BlogSection\Post\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListPostsRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
