<?php

namespace App\Containers\BlogSection\Post\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\BlogSection\Post\Actions\StorePostAction;
use App\Containers\BlogSection\Post\UI\API\Requests\StorePostRequest;
use App\Containers\BlogSection\Post\UI\API\Transformers\PostTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class StorePostController extends ApiController
{
    public function __invoke(StorePostRequest $request, StorePostAction $action): JsonResponse
    {
        $post = $action->run($request->getDTO());

        return Response::create($post, PostTransformer::class)->created();
    }
}
