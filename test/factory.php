<?php

use Src\Factory\ShapeFactory;

require_once __DIR__ . '/../vendor/autoload.php';

// 工厂模式
(function(){

    $shapeFactory = new ShapeFactory();

    $square = $shapeFactory->getShape('Square');
    $square->draw();
    $circle = $shapeFactory->getShape('circle');
    $circle->draw();
    $rectangle = $shapeFactory->getShape('rectangle');
    $rectangle->draw();

})();
