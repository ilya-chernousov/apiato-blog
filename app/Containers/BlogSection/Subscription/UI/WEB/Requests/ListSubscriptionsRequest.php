<?php

namespace App\Containers\BlogSection\Subscription\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListSubscriptionsRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
