<?php

namespace App\ValueObjects;

use Carbon\Carbon;
use InvalidArgumentException;

class BirthOnValueObject
{
    private $value;

    public function __construct(string $value)
    {
        if (empty($value)) throw new InvalidArgumentException('引数が不正です。');

        $this->value = Carbon::parse($value);
    }

    public function get(): string
    {
        return $this->value->format('Y/m/d');
    }

    public static function validate(): array
    {
        return ['required', 'date'];
    }
}
