<?php

namespace App\Ship\Commands;

use App\Containers\BlogSection\Category\Models\Category;
use App\Ship\Parents\Commands\Command;

final class TestCommand extends Command
{
    protected $signature = 'test';
    protected $description = '';

    public function handle(): void
    {
//        Category::create([
//            'name' => 'Нейросети'
//        ]);
        $cats = Category::all();
        dump($cats);
    }
}
