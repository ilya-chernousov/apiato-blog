<?php

namespace App\Containers\ShopSection\Product\UI\API\Transformers;

use App\Containers\ShopSection\Product\Models\Product;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class ProductTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Product $product): array
    {
        return [
            'type' => $product->getResourceKey(),
            'id' => $product->getHashedKey(),
            'name' => $product->name,
            'descr' => $product->descr,
            'price' => $product->price,
            'count' => $product->count,
            'created_at' => $product->created_at,
            'updated_at' => $product->updated_at,
            'readable_created_at' => $product->created_at->diffForHumans(),
            'readable_updated_at' => $product->updated_at->diffForHumans(),
        ];
    }
}
