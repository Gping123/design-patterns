<?php

namespace Src\AbstractFactory;

/**
 * Shape class
 * 图形工厂
 */
class ShapeFactory implements AbstractFactory
{
    /**
     * getShape function
     *
     * @param string $type
     * @return Shape|null
     */
    public function getShape(string $type)
    {
        switch(strtoupper($type)) {
            case 'CIRCLE':
                return new Circle();
            case 'SQUARE':
                return new Square();
        }

        return null;
    }

    /**
     * getColor function
     *
     * @param string $color
     * @return null
     */
    public function getColor(string $color)
    {
        return null;
    }
}

