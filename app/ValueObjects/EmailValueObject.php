<?php

namespace App\ValueObjects;

class EmailValueObject
{
    private $value;

    public function __construct(string $value)
    {
        if (empty($value) || !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('引数が不正です。');
        }

        $this->value = $value;
    }

    public function get(): string
    {
        return $this->value;
    }

    public static function validate(): array
    {
        return ['required', 'string', 'email:strict,spoof,filter'];
    }
}
