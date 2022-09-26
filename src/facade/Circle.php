<?php

namespace Src\Facade;

class Circle implements Shape
{
    public function draw() : void
    {
        echo 'Circle::draw()'. PHP_EOL;        
    }
}
