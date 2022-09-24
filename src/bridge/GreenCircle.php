<?php

namespace Src\Bridge;

/**
 * GreenCircle class
 * 绿色圆形类
 */
class GreenCircle implements DrawAPI
{
    /**
     * drawCircle function
     * 绘制圆形
     *
     * @param integer $radius
     * @param integer $x
     * @param integer $y
     * @return void
     */
    public function drawCircle(int $radius, int $x, int $y) : void
    {
        echo 'Drawing Circle[ color: green, radius: '.$radius.', x: '.$x.' , y : '.$y.' ]'.PHP_EOL;
    }
}
