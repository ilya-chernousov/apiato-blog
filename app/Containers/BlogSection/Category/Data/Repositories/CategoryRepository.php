<?php

namespace App\Containers\BlogSection\Category\Data\Repositories;

use App\Containers\BlogSection\Category\Models\Category;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Category
 *
 * @extends ParentRepository<TModel>
 */
final class CategoryRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
