<?php

namespace Src\Decorator;

/**
 * Shape interface
 * 形状接口 【装饰模式统一接口】
 */
interface Shape 
{
    
    /**
     * draw function
     * 绘制方法
     * @return void
     */
    public function draw() : void;

}
