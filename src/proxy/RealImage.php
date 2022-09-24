<?php

namespace Src\Proxy;

class RealImage implements Image
{
    private $fileName;

    /**
     * realImage function
     * 真实文件
     * @param string $fileName
     * @return void
     */
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk($fileName);
    }

    /**
     * display function
     * 显示文件
     * @return void
     */
    public function display() : void
    {
        echo '显示文件'. $this->fileName .PHP_EOL;    
    }

    // ====== private methods ======

    private function loadFromDisk(string $fileName)
    {
        echo '加载文件 : '.$fileName.PHP_EOL;
    }

}

