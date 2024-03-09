<?php

require_once "vendor/autoload.php";

// use Lewy9109\Attributes\DTO\Product;
use App\ValueObject\Standard\TextValue;

// // $product = new Product(
// //     new TextValue()
// // );

$name = new TextValue("First Product");

dump($name->getValue());
