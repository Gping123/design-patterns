<?php

namespace Src\Prototype;

/**
 * Circle class
 * 基于图形类的圆形类
 */
class Circle extends Shape 
{
    protected $type = 'Circle';

    /**
     * 实现抽象方法
     *
     * @return void
     */
    public function draw()
    {
        echo $this->type.'类：绘制圆形'.$this->getId().PHP_EOL;
    }
}

