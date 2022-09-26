<?php

namespace Src\Decorator;

/**
 * Rectangle class
 * 长方形类 
 */
class Rectangle implements Shape
{
    /**
     * draw function
     * 绘制方法
     * @override
     * @return void
     */
    public function draw() : void
    {
        echo 'Shape: Rectangle'.PHP_EOL;        
    }
}
