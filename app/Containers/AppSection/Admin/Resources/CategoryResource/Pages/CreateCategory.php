<?php

namespace App\Containers\AppSection\Admin\Resources\CategoryResource\Pages;

use App\Containers\AppSection\Admin\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
