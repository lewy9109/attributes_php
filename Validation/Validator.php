<?php

namespace App\Validation;

class Validator
{
    private array $errors;

    public function validate(object $object): void
    {
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
