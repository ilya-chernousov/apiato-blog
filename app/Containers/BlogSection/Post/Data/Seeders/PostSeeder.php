<?php

namespace App\Containers\BlogSection\Post\Data\Seeders;

use App\Containers\BlogSection\Post\Models\Post;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

final class PostSeeder extends ParentSeeder
{
    public function run(): void
    {
        Post::factory(15)->create();
    }
}
