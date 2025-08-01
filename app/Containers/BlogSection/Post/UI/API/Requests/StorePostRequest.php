<?php

namespace App\Containers\BlogSection\Post\UI\API\Requests;

use App\Containers\BlogSection\Post\Data\DTO\PostData;
use App\Ship\Parents\Requests\Request as ParentRequest;
use App\Ship\Traits\HasDTO;

final class StorePostRequest extends ParentRequest
{
    use HasDTO;
    protected array $decode = [];

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'body' => ['required', 'string', 'max:65535'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
        ];
    }

    protected function getDtoClass(): string
    {
        return PostData::class;
    }
}
