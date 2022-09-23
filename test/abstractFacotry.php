<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Src\AbstractFactory\FactoryProducer;


(function(){

    // 工厂生产
    $factoryProducer = new FactoryProducer();

    // 颜色工厂
    $colorFactory = $factoryProducer->getFactory('color');
    $colorFactory->getColor('red')->fill();
    $colorFactory->getColor('yellow')->fill();

    // 图形工厂
    $shapeFactory = $factoryProducer->getFactory('shape');
    $shapeFactory->getShape('Square')->draw();
    $shapeFactory->getShape('circle')->draw();


})();

