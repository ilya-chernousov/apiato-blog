<?php

namespace App\Containers\BlogSection\Post\Data\DTO;

use Spatie\LaravelData\Attributes\FromAuthenticatedUserProperty;
use Spatie\LaravelData\Data;

class PostData extends Data
{
    public function __construct(
        public string $title,
        public string $body,
        public int $category_id,
        #[FromAuthenticatedUserProperty('api', 'id')]
        public int $user_id,
    ) {
    }
}
