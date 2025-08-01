<?php

namespace App\Containers\ShopSection\Product\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\ShopSection\Product\Actions\ListProductsAction;
use App\Containers\ShopSection\Product\UI\API\Transformers\ProductTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class GetListProductsController extends ApiController
{
    public function __invoke(ListProductsAction $action): JsonResponse
    {
        $products = $action->run();

        return Response::create($products, ProductTransformer::class)->ok();
    }
}
