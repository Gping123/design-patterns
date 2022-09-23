<?php

namespace Src\Prototype;

/**
 * Rectangle class
 * 基于图形类的 长方形类
 */
class Rectangle extends Shape
{
    protected $type = 'Rectangle';

    /**
     * 实现抽象方法
     *
     * @return void
     */
    public function draw()
    {
        echo $this->type.' 类：绘制了长方形'.$this->getId().PHP_EOL;
    }
}
