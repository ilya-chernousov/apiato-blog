<?php

namespace App\Containers\AppSection\Media\Actions;

use App\Containers\AppSection\Media\Models\Media;
use App\Containers\AppSection\Media\Tasks\FindMediaByIdTask;
use App\Containers\AppSection\Media\UI\WEB\Requests\FindMediaByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindMediaByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindMediaByIdTask $findMediaByIdTask,
    ) {
    }

    public function run(FindMediaByIdRequest $request): Media
    {
        return $this->findMediaByIdTask->run($request->id);
    }
}
