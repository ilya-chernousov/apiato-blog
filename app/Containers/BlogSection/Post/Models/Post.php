<?php

namespace App\Containers\BlogSection\Post\Models;

use App\Containers\BlogSection\Post\Data\Factories\PostFactory;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

final class Post extends ParentModel
{
    use HasFactory;

    protected $guarded = false;

    protected static function newFactory()
    {
        return PostFactory::new();
    }
}
