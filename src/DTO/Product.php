<?php

namespace App\DTO;

use App\Validation\Rule\Required;

readonly class Product
{
    public function __construct(
        #[Required] public readonly string $erpId,
        #[Required] public readonly string $name,
        #[Required] public readonly int $stock
    ) {
    }
}
