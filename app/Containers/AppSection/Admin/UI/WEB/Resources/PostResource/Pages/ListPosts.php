<?php

namespace App\Containers\AppSection\Admin\UI\WEB\Resources\PostResource\Pages;

use App\Containers\AppSection\Admin\UI\WEB\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
