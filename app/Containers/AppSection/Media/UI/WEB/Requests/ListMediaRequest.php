<?php

namespace App\Containers\AppSection\Media\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListMediaRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
