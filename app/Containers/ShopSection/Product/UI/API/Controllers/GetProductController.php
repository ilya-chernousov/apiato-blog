<?php

namespace App\Containers\ShopSection\Product\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\ShopSection\Product\Actions\FindProductByIdAction;
use App\Containers\ShopSection\Product\Models\Product;
use App\Containers\ShopSection\Product\UI\API\Transformers\ProductTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class GetProductController extends ApiController
{
    public function __invoke(Product $product): JsonResponse
    {
        //        $product = $action->run($request);

        return Response::create($product, ProductTransformer::class)->ok();
    }
}
