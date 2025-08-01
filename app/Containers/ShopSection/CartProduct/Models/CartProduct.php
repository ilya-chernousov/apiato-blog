<?php

namespace App\Containers\ShopSection\CartProduct\Models;

use App\Containers\ShopSection\Product\Models\Product;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class CartProduct extends ParentModel
{
    protected $guarded = false;

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
