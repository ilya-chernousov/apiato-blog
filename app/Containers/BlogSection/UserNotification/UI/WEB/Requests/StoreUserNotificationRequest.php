<?php

namespace App\Containers\BlogSection\UserNotification\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class StoreUserNotificationRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
