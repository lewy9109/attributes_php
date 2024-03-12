<?php

namespace App\Validation;

use Reflection;
use ReflectionAttribute;
use ReflectionClass;
use App\Validation\Rule\ValidatorRuleInterface;
use App\Validation\Validators\ValidatorInterface;

class Validator
{
    private array $errors = [];

    public function validate(object $object): void
    {
        $reflector = new ReflectionClass($object);
        foreach ($reflector->getProperties() as $property) {
            $attributs = $property->getAttributes(
                ValidatorRuleInterface::class,
                ReflectionAttribute::IS_INSTANCEOF
            );

            foreach ($attributs as $atrubut) {
                /**@ValidatorInterface $validator*/
                $validator = $atrubut->newInstance()->getValidator();

                if (!$validator->validate($property->getValue($object))) {
                    $this->errors[$property->getName()][] = sprintf(
                        "Property %s: %s",
                        $property->getName(),
                        $validator->getErrorMessage()
                    );
                }
            }
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
