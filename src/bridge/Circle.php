<?php

namespace Src\Bridge;

/**
 * Circle class
 * 圆形类
 *     间接实现了DrawAPI接口【通过构造方法中的DrawAPI参数实现】
 */
class Circle extends Shape
{
    private $x;
    private $y;
    private $radius;

    /**
     * __construct function
     *
     * @param integer $x
     * @param integer $y
     * @param integer $radius
     * @param DrawAPI $drawAPI
     */
    public function __construct(int $x, int $y, int $radius, DrawAPI $drawAPI)
    {
        parent::__construct($drawAPI);
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;        
    }

    /**
     * draw function
     * 绘画实现=
     *
     * @return void
     */
    public function draw() : void
    {
        $this->drawApi->drawCircle($this->radius, $this->x, $this->y);
    }
}

