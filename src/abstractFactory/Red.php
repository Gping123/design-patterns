<?php

namespace Src\AbstractFactory;

class Red implements Color
{
    public function fill()
    {
        echo '填充红色'.PHP_EOL;
    }
}

