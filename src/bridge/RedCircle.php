<?php

namespace Src\Bridge;

/**
 * RedCircle class
 * 红色圆形类
 */
class RedCircle implements DrawAPI
{
    /**
     * drawCircle function
     * 绘制红色圆形
     *
     * @param integer $radius
     * @param integer $x
     * @param integer $y
     * @return void
     */
    public function drawCircle(int $radius, int $x, int $y) : void
    {
        echo 'Drawing Circle[ color: red, radius: '.$radius.', x: '.$x.' , y : '.$y.' ]'.PHP_EOL;
    }
}
