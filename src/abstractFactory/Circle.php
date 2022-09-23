<?php

namespace Src\AbstractFactory;

class Circle implements Shape
{
    public function draw()
    {
        echo '画了圆形'.PHP_EOL;
    }
}

