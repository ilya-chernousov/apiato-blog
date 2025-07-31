<?php

namespace App\Containers\BlogSection\Category\Models;

use App\Containers\BlogSection\Category\Data\Factories\CategoryFactory;
use App\Containers\BlogSection\Post\Models\Post;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Category extends ParentModel
{
    use HasFactory;
    protected $fillable = ['name'];

    protected static function newFactory()
    {
        return CategoryFactory::new();
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
