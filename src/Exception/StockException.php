<?php

namespace App\Exception;

use InvalidArgumentException;
use Throwable;

class StockException extends InvalidArgumentException
{
    public function __construct(
        string $message,
        $code = 0,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
