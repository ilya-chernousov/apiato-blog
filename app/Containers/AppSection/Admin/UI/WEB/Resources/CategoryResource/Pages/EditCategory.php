<?php

namespace App\Containers\AppSection\Admin\UI\WEB\Resources\CategoryResource\Pages;

use App\Containers\AppSection\Admin\UI\WEB\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
