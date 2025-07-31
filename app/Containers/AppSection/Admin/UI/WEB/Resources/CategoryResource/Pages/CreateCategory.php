<?php

namespace App\Containers\AppSection\Admin\UI\WEB\Resources\CategoryResource\Pages;

use App\Containers\AppSection\Admin\UI\WEB\Resources\CategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
