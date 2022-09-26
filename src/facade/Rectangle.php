<?php

namespace Src\Facade;

class Rectangle implements Shape
{
    public function draw() : void
    {
        echo 'Rectangle::draw()'. PHP_EOL;        
    }
}
