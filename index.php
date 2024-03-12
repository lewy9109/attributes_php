<?php

require_once "vendor/autoload.php";

use App\DTO\Product;
use App\Validation\Validator;

//error
$name = "";

$erpId = "XXX-123";

//error
$stock = 0;

$product = new Product($name, $erpId, $stock);
$validator = new Validator();

$validator->validate($product);
$errors = $validator->getErrors();

dump($errors);
