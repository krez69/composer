<?php

require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\SayHello;
use App\Wcs\Hello;

$objet_one = new Hello();
$objet_two = new SayHello();


echo $objet_one->talk() . "<br>";


echo $objet_two->world();






