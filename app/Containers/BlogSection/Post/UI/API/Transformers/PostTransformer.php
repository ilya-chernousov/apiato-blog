<?php

namespace App\Containers\BlogSection\Post\UI\API\Transformers;

use Apiato\Http\Resources\Item;
use App\Containers\AppSection\User\UI\API\Transformers\UserMinDataTransformer;
use App\Containers\BlogSection\Category\UI\API\Transformers\CategoryTransformer;
use App\Containers\BlogSection\Post\Models\Post;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class PostTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [
        'category', 'user',
    ];

    public function transform(Post $post): array
    {
        return [
            'type' => $post->getResourceKey(),
            'id' => $post->getHashedKey(),
            //  'category_id' => $post->category_id,
            //  'user_id' => $post->user_id,
            'title' => $post->title,
            'body' => $post->body,
            'created_at' => $post->created_at,
            'updated_at' => $post->updated_at,
            //  'readable_created_at' => $post->created_at->diffForHumans(),
            //  'readable_updated_at' => $post->updated_at->diffForHumans(),
        ];
    }

    public function includeCategory(Post $post): Item
    {
        return $this->item($post->category, new CategoryTransformer());
    }

    public function includeUser(Post $post): Item
    {
        return $this->item($post->user, new UserMinDataTransformer());
    }
}
