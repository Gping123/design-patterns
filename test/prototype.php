<?php

use Src\Prototype\Circle;
use Src\Prototype\Rectangle;
use Src\Prototype\Square;

require_once __DIR__ . '/../vendor/autoload.php';

(function(){
    $circle = new Circle();
    $square = new Square();
    $rectangle = new Rectangle();

    for($i = 0; $i < 10; ++$i) {
        $circle->clone()->setId($i)->draw();
        $square->clone()->setId($i)->draw();
        $rectangle->clone()->setId($i)->draw();
    }

})();

