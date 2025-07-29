<?php

namespace App\Containers\BlogSection\Subscription\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class StoreSubscriptionRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
