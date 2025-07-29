<?php

namespace App\Containers\BlogSection\Like\Data\Repositories;

use App\Containers\BlogSection\Like\Models\Like;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Like
 *
 * @extends ParentRepository<TModel>
 */
final class LikeRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
