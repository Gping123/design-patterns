<?php

namespace Src\Decorator;

/**
 * ShapeDecorator class
 * 形状装饰器【实现形状统一接口】
 */
abstract class ShapeDecorator implements Shape
{
    /**
     * Shape variable
     * 装饰对象
     * @var Shape
     */
    protected $decoratedShape;

    /**
     * construct function
     *
     * @param Shape $decoratedShape
     */
    public function __construct(Shape $decoratedShape)
    {
        $this->decoratedShape = $decoratedShape;
    }

    /**
     * draw function
     * 实现绘制方法
     *
     * @return void
     */
    public function draw() : void
    {
        $this->decoratedShape->draw();
    }


}
