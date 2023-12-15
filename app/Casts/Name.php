<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class Name implements CastsAttributes
{
    public function get(Model $model, string $key, mixed $value, array $attributes)
    {
        return $value;
    }

    public function set(Model $model, string $key, mixed $value, array $attributes)
    {
        return (string)str($value)->lower()->headline();
    }
}
