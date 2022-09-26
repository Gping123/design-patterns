<?php

namespace Src\Facade;

class Square implements Shape
{
    public function draw() : void
    {
        echo 'Square::draw()'. PHP_EOL;        
    }
}
