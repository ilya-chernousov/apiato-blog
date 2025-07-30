<?php

namespace App\Containers\AppSection\Media\Actions;

use App\Containers\AppSection\Media\Tasks\ListMediaTask;
use App\Containers\AppSection\Media\UI\WEB\Requests\ListMediaRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListMediaAction extends ParentAction
{
    public function __construct(
        private readonly ListMediaTask $listMediaTask,
    ) {
    }

    public function run(ListMediaRequest $request): mixed
    {
        return $this->listMediaTask->run();
    }
}
