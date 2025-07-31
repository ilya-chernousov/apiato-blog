<?php

namespace App\Ship\Traits;

use Spatie\LaravelData\Data;

trait HasDTO
{
    public function getDTO(): Data
    {
        // Предполагается, что класс должен определить getDtoClass()
        $dtoClass = $this->getDtoClass();

        return $dtoClass::from($this->validated());
    }

    abstract protected function getDtoClass(): string;
}
