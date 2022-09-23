<?php

require_once __DIR__ . '/../vendor/autoload.php';

use \Src\Singleton\Singleton;

// 单例模式测试
(function() {

    $s1 = Singleton::getSingleton();
    $s2 = Singleton::getSingleton();


    echo $s1->getTime(), PHP_EOL;
    echo $s1->getTime(), PHP_EOL;

    echo $s1 === $s2;

})();
