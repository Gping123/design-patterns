<?php

namespace Src\Strategy;

interface Strategy
{
    public function doOperation(int $num1, int $num2) : int;
}
