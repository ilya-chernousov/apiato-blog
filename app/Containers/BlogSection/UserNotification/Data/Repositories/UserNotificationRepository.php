<?php

namespace App\Containers\BlogSection\UserNotification\Data\Repositories;

use App\Containers\BlogSection\UserNotification\Models\UserNotification;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of UserNotification
 *
 * @extends ParentRepository<TModel>
 */
final class UserNotificationRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
