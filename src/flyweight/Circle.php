<?php

namespace Src\Flyweight;

/**
 * Circle class
 * 圆形类
 */
class Circle implements Shape
{
    private $color;
    private $x;
    private $y;
    private $radius;

    /**
     * construct function
     *
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /**
     * setX function
     * 设置X轴
     * @param integer $x
     * @return Circle
     */
    public function setX(int $x) : Circle
    {
        $this->x = $x;
        return $this;
    }

    /**
     * setY function
     * 设置Y轴
     * @param integer $y
     * @return Circle
     */
    public function setY(int $y) : Circle
    {
        $this->y = $y;
        return $this;
    }
    
    /**
     * setRadius function
     * 设置圆角
     * @param integer $radius
     * @return Circle
     */
    public function setRadius(int $radius) : Circle
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * draw function
     * 绘制图形
     * @override
     * @return void
     */
    public function draw() : void
    {
        echo sprintf("Circle: Draw() [color: %s,x:%d,y:%d,radius:%d]\n", 
            $this->color, $this->x, $this->y, $this->radius);
    }
}
