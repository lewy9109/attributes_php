<?php

namespace App\ValueObject\Standard;

class TextValue
{
    public function __construct(public readonly string $text)
    {
    }

    public function getValue(): self
    {
        return new self($this->text);
    }
}
