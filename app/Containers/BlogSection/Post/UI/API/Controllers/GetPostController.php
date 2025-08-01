<?php

namespace App\Containers\BlogSection\Post\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\BlogSection\Post\Actions\FindPostByIdAction;
use App\Containers\BlogSection\Post\Models\Post;
use App\Containers\BlogSection\Post\UI\API\Transformers\PostTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class GetPostController extends ApiController
{
    public function __invoke(Post $post, FindPostByIdAction $action): JsonResponse
    {
        //        $post = $action->run($request);
        return Response::create($post, PostTransformer::class)->ok();
    }
}
