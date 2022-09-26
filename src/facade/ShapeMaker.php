<?php

namespace Src\Facade;

class ShapeMaker 
{
    // 圆形对象
    private $circle;
    // 长方形对象
    private $rectangle;
    // 正方形对象
    private $square;

    /**
     * construct function
     * 构造方法
     */
    public function __construct()
    {
        $this->circle = new Circle();
        $this->rectangle = new Rectangle();
        
        $this->square = new Square();
    }

    // ====== 门面方法 ======

    /**
     * drawCircle function
     * 绘制圆形
     *
     * @return void
     */
    public function drawCircle()
    {
        $this->circle->draw();
    }

    /**
     * drawRectangle function
     * 绘制长方形
     *
     * @return void
     */
    public function drawRectangle()
    {
        $this->rectangle->draw();
    }

    /**
     * drawSquare function
     * 绘制正方形
     *
     * @return void
     */
    public function drawSquare()
    {
        $this->square->draw();
    }

}
