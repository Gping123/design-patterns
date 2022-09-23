<?php

namespace Src\Prototype;

/**
 * Square class
 * 基于图形类的正方形类
 */
class Square extends Shape
{
    protected $type = 'Square';

    /**
     * 实现抽象方法
     *
     * @return void
     */
    public function draw()
    {
        echo $this->type. '类：绘制了正方形'.$this->getId().PHP_EOL;
    }
}

