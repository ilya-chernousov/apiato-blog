<?php

namespace App\Containers\AppSection\Admin\UI\WEB\Resources\PostResource\Pages;

use App\Containers\AppSection\Admin\UI\WEB\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
