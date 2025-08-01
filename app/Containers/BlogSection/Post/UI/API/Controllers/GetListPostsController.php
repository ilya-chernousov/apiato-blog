<?php

namespace App\Containers\BlogSection\Post\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\BlogSection\Post\Actions\ListPostsAction;
use App\Containers\BlogSection\Post\UI\API\Transformers\PostTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class GetListPostsController extends ApiController
{
    public function __invoke(ListPostsAction $action): JsonResponse
    {
        $posts = $action->run();

        return Response::create($posts, PostTransformer::class)->ok();
    }
}
