<?php

namespace Src\AbstractFactory;

/**
 * FactoryProducer class
 */
class FactoryProducer
{
    /**
     * getFactory function
     *
     * @param string $choice
     * @return null|ColorFactory|ShapeFactory
     */
    public function getFactory(string $choice)
    {
        switch(strtoupper($choice)) {
            case 'COLOR':
                return new ColorFactory;
            case 'SHAPE':
                return new ShapeFactory; 
        }
        return null;
    }
}
