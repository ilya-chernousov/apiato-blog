<?php

namespace App\Containers\BlogSection\Category\Data\Factories;

use App\Containers\BlogSection\Category\Models\Category;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Category
 *
 * @extends ParentFactory<TModel>
 */
final class CategoryFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(1, true),
        ];
    }
}
