<?php

namespace App\Containers\BlogSection\UserNotification\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindUserNotificationByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
