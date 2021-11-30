<?php

require_once './vendor/autoload.php';


use \Src\Singleton\Singleton;


$s1 = Singleton::getSingleton();
$s2 = Singleton::getSingleton();


echo $s1->getTime(), PHP_EOL;
echo $s1->getTime(), PHP_EOL;

echo $s1 === $s2;


while(1) {
    $s1->getTime();
    $s2->getTime();
}

