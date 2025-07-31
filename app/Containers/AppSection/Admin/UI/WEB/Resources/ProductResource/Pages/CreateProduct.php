<?php

namespace App\Containers\AppSection\Admin\UI\WEB\Resources\ProductResource\Pages;

use App\Containers\AppSection\Admin\UI\WEB\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;
}
