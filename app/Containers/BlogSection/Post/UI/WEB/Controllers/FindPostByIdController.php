<?php

namespace App\Containers\BlogSection\Post\UI\WEB\Controllers;

use App\Containers\BlogSection\Post\Actions\FindPostByIdAction;
use App\Containers\BlogSection\Post\Models\Post;
use App\Containers\BlogSection\Post\UI\WEB\Requests\FindPostByIdRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\View\View;

final class FindPostByIdController extends WebController
{
    public function __invoke(int $id, FindPostByIdAction $action): View // FindPostByIdRequest $request, FindPostByIdAction $action
    {
        $post = $action->run($id);
        return view('blogSection@post::show', compact('post'));
    }
}
