<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Src\Flyweight\ShapeFactory;
use Src\Flyweight\Circle;

(function(){

    /**
     * getRandomColor function
     * 获取随机颜色
     * @return string
     */
    function getRandomColor() {
        $colors = ['red', 'green', 'blue', 'white', 'black'];
        return $colors[array_rand($colors)];
    }

    /**
     * getRandom function
     * 获取随机数
     * @return int
     */
    function getRandom() {
        return rand(0, 100);
    }

    /**
     * 使用不同颜色绘制圆形
     */
    for($i = 0; $i < 100 ; ++$i) {
        /**
         * 使用享元模式生产Circle对象
         * @var Circle $circle
         */
        $circle = ShapeFactory::getCircle(getRandomColor());

        $circle->setX(getRandom());
        $circle->setX(getRandom());
        $circle->setRadius(100);

        $circle->draw();
    }

})();


