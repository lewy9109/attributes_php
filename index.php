<?php

require_once "vendor/autoload.php";

use App\ValueObject\Standard\TextValue;
use App\Validation\Validator;

$name = new TextValue("");

$validator = new Validator();

$validator->validate($name);

$errors = $validator->getErrors();

dump($name->getValue());
