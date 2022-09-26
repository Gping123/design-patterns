<?php

namespace Src\Flyweight;

/**
 * ShapeFactory class
 * 图形工厂 【享元模式核心】
 *     就是各种池的实现原理
 */
class ShapeFactory 
{
    protected static $map = [];

    /**
     * getCircle function
     * 获取指定颜色的圆形
     * @param string $color
     * @return Shape
     */
    public static function getCircle(string $color) : Shape
    {
        /**
         * @var Shape $shape
         */
        if(!($shape = static::$map[$color] ?? null)) {

            $shape = new Circle($color);
            static::$map[$color] = $shape;
            echo 'Creating circle of color : '. $color .PHP_EOL;
        }

        return $shape;

    }

}

