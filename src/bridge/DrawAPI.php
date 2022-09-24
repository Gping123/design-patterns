<?php

namespace Src\Bridge;

/**
 * DrawAPI interface
 * 绘制圆形接口
 */
interface DrawAPI
{
    public function drawCircle(int $radius, int $x, int $y) : void ;
}
