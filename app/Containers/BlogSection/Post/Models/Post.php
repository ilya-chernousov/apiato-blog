<?php

namespace App\Containers\BlogSection\Post\Models;

use App\Containers\AppSection\User\Models\User;
use App\Containers\BlogSection\Category\Models\Category;
use App\Containers\BlogSection\Post\Data\Factories\PostFactory;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Post extends ParentModel
{
    use HasFactory;

    protected $guarded = false;

    protected static function newFactory()
    {
        return PostFactory::new();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
