<?php

namespace Src\Decorator;

/**
 * Circle class
 * 圆形类 【实现形状接口】
 */
class Circle implements Shape
{
    /**
     * draw function
     * 实现绘制方法
     * @override
     * @return void
     */
    public function draw() : void
    {
        echo 'Shape : Circle'.PHP_EOL;
    }
    
}
