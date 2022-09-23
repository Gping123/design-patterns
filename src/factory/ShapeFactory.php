<?php

namespace Src\Factory;

/**
 * ShapeFactory class
 * 图形工厂类
 */
class ShapeFactory
{
    public function getShape(string $type)
    {
        if (!$type) {
            return null;
        }

        switch(strtoupper($type)) {
            case 'CIRCLE':
                return new Circle();
            case 'RECTANGLE':
                return new Rectangle();
            case 'SQUARE':
                return new Square();
        }

        return null;

    }
}
