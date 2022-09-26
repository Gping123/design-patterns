<?php

namespace Src\Decorator;

/**
 * RedShapedDecorator class
 * 红色形状装饰器
 */
class RedShapeDecorator extends ShapeDecorator
{
    /**
     * draw function
     * 绘制方法
     *
     * @return void
     */
    public function draw() : void
    {
        // 可先调被装饰的目标的绘制方法，也可以在后调
        // 根据具体情况而定
        $this->decoratedShape->draw();
        $this->setRedBorder($this->decoratedShape);
    }

    /**
     * setHedBorder function
     * 特有的装饰
     * @param Shape $decoratedShape
     * @return void
     */
    public function setRedBorder(Shape $decoratedShape)
    {
        echo 'Border Color : red' . PHP_EOL;
    }

}
