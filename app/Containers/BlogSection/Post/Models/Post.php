<?php

namespace App\Containers\BlogSection\Post\Models;

use App\Containers\AppSection\User\Models\User;
use App\Containers\BlogSection\Category\Models\Category;
use App\Containers\BlogSection\Post\Data\Factories\PostFactory;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

final class Post extends ParentModel implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded = false;

    protected static function newFactory()
    {
        return PostFactory::new();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('posts')
            ->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('list_image')
                    ->width(800)
                    ->height(500);
            });
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
