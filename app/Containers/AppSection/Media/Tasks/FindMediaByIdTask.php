<?php

namespace App\Containers\AppSection\Media\Tasks;

use App\Containers\AppSection\Media\Data\Repositories\MediaRepository;
use App\Containers\AppSection\Media\Models\Media;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindMediaByIdTask extends ParentTask
{
    public function __construct(
        private readonly MediaRepository $repository,
    ) {
    }

    public function run($id): Media
    {
        return $this->repository->findOrFail($id);
    }
}
