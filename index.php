<?php

require __DIR__ . '/vendor/autoload.php';

use App\Challenge;
use App\Collection\ValidateCollection;

$obj = new Challenge(new ValidateCollection());
$obj->getResult();

print_r($obj->getResult()[1]);