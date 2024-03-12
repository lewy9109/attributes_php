<?php

namespace App\Validation\Rule;

use App\Validation\Rule\ValidatorRuleInterface;
use App\Validation\Validators\ValidatorInterface;
use Attribute;
use App\Validation\Validators\RequireValidator;

#[Attribute]
class Required implements ValidatorRuleInterface
{
    public function getValidator(): ValidatorInterface
    {
        return new RequireValidator();
    }
}
