<?php

namespace Src\Factory;

/**
 * Square class
 * 圆形类 继承 图形接口
 */
class Circle implements Shape
{
    public function draw()
    {
        echo '绘制圆形'.PHP_EOL;
    }
}

