<?php

namespace Src\Factory;

/**
 * Rectangle class
 * 长方形类 继承图形接口
 */
class Rectangle implements Shape
{
    public function draw()
    {
        echo '绘制长方形'.PHP_EOL;
    }
}
