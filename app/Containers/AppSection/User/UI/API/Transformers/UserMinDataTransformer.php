<?php

namespace App\Containers\AppSection\User\UI\API\Transformers;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class UserMinDataTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(User $user): array
    {
        return [
            'id' => $user->getHashedKey(),
            'name' => $user->name,
            'lastname' => $user->lastname,
            'midname' => $user->midname,
        ];
    }
}
