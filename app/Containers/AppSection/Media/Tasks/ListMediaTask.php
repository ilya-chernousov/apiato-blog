<?php

namespace App\Containers\AppSection\Media\Tasks;

use App\Containers\AppSection\Media\Data\Repositories\MediaRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListMediaTask extends ParentTask
{
    public function __construct(
        private readonly MediaRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
