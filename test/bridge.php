<?php

use Src\Bridge\Circle;
use Src\Bridge\GreenCircle;
use Src\Bridge\RedCircle;

require_once __DIR__ .'/../vendor/autoload.php';

(function(){

    $redCircle = new Circle(180,100,10, new RedCircle());

    $greenCircle = new Circle(100,100,10, new GreenCircle());

    $redCircle->draw();
    $greenCircle->draw();

})();

