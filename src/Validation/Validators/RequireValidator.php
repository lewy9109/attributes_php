<?php

namespace App\Validation\Validators;

class RequireValidator implements ValidatorInterface
{
    public function validate(mixed $value): bool
    {
        return !empty($value);
    }

    public function getErrorMessage(): string
    {
        return "Value is reqired.";
    }
}
