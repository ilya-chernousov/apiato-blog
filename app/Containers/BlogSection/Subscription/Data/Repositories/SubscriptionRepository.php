<?php

namespace App\Containers\BlogSection\Subscription\Data\Repositories;

use App\Containers\BlogSection\Subscription\Models\Subscription;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Subscription
 *
 * @extends ParentRepository<TModel>
 */
final class SubscriptionRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
