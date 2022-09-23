<?php

namespace Src\AbstractFactory;

/**
 * ColorFactory class
 * 颜色工厂
 */
class ColorFactory implements AbstractFactory
{
    /**
     * getShape function
     *
     * @param string $type
     * @return null
     */
    public function getShape(string $type)
    {
        return null;
    }

    /**
     * getColor function
     *
     * @param string $color
     * @return null|Color
     */
    public function getColor(string $color)
    {
        switch(strtoupper($color)) {
            case 'RED':
                return new Red();
            case 'YELLOW':
                return new Yellow();
        }

        return null;
    }
}

