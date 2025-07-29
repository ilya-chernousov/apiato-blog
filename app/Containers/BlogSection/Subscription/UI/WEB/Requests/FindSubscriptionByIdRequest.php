<?php

namespace App\Containers\BlogSection\Subscription\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindSubscriptionByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
