<?php

namespace Src\Factory;

/**
 * Square class
 * 正方形 继承 图形接口
 */
class Square implements Shape
{
    public function draw()
    {
        echo '绘制正方形'.PHP_EOL;
    }
}

