<?php

namespace App\Containers\ShopSection\Product\Models;

use App\Ship\Parents\Models\Model as ParentModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

final class Product extends ParentModel implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = false;

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('products')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('list_image')
                    ->width(800)
                    ->height(500);
            });
    }
}
