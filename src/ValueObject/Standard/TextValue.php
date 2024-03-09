<?php

namespace App\ValueObject\Standard;

use App\Validation\Rule\Required;

class TextValue
{
    public function __construct(#[Required] public readonly string $text)
    {
    }

    public function getValue(): self
    {
        return new self($this->text);
    }
}
