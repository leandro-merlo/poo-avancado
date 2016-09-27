<?php

require_once '../vendor/autoload.php';

$product = Container::newProduct('MySQL');

var_dump($product->all());