<?php

namespace App\DTO;

use App\ValueObject\Standard\TextValue;
use App\ValueObject\Stock;

readonly class Product
{
    public function __construct(
        public readonly TextValue $erpId,
        public readonly TextValue $name,
        public readonly Stock $stock
    ) {
    }
}
