<?php

namespace App\Containers\BlogSection\Post\Data\Repositories;

use App\Containers\BlogSection\Post\Models\Post;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Post
 *
 * @extends ParentRepository<TModel>https://apiato.io/docs/components/optional-components/repository/repositories
 */
final class PostRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
