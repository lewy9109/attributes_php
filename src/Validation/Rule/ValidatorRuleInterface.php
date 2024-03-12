<?php

namespace App\Validation\Rule;

use App\Validation\Validators\ValidatorInterface;

interface ValidatorRuleInterface
{
    public function getValidator(): ValidatorInterface;
}
