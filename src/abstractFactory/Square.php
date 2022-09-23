<?php

namespace Src\AbstractFactory;

class Square implements Shape
{
    public function draw()
    {
        echo '画了正方形'.PHP_EOL;
    }
}
