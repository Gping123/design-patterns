<?php

namespace Src\Proxy;

class ProxyImage implements Image 
{
    protected $realImage;
    protected $fileName;

    /**
     * construct function
     * 代理构造方法
     *
     * @param string $fileName
     * @return void
     */
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * display function
     *
     * @return void
     */
    public function display() : void
    {
        if ($this->realImage == null) {
            $this->realImage = new RealImage($this->fileName);
        }

        $this->realImage->display();

    }
}

