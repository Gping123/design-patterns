<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Src\Decorator\Circle;
use Src\Decorator\Rectangle;
use Src\Decorator\RedShapeDecorator;


(function(){

    $circle = new Circle();
    
    $redCircle = new RedShapeDecorator(new Circle());

    $redRectangle = new RedShapeDecorator(new Rectangle());

    echo 'Circle with normal border'.PHP_EOL;
    $circle->draw();

    echo 'Circle of red border'.PHP_EOL;
    $redCircle->draw();

    echo 'Rectangle of red border'.PHP_EOL;
    $redRectangle->draw();


})();

