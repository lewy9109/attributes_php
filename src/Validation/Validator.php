<?php

namespace App\Validation;

use ReflectionClass;

class Validator
{
    private array $errors;

    public function validate(object $object): void
    {
        $reflector = new ReflectionClass($object);

        dd($reflector);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
