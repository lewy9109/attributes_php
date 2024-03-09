<?php

namespace App\ValueObject;

use App\Exception\StockException;

readonly class Stock
{
    public function __construct(public int $value)
    {
        if ($value < 0) {
            throw new StockException(
                "The value must be equal to or greater than 0."
            );
        }
    }

    public function getValue(): self
    {
        return new self($this->value);
    }
}
