<?php

require_once '../vendor/autoload.php';

$container = Source\ServiceContainer::getInstance();
$productRepo = $container->getContainer()['productRepository'];

var_dump($productRepo->all());