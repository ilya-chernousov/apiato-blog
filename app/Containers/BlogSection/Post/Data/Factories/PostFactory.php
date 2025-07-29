<?php

namespace App\Containers\BlogSection\Post\Data\Factories;

use App\Containers\BlogSection\Category\Models\Category;
use App\Containers\BlogSection\Post\Models\Post;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Post
 *
 * @extends ParentFactory<TModel>
 */
final class PostFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'body' => $this->faker->paragraph(),
            'user_id' => 1,
            'category_id' => Category::inRandomOrder()->first()->id,
            'image_path' => $this->faker->imageUrl(800, 500),
        ];
    }
}
