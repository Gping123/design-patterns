<?php
require_once __DIR__.'/../vendor/autoload.php';

use Src\Proxy\ProxyImage;


(function(){
    // 创建一个代理对象
    $image = new ProxyImage('a.jpg');

    // display方法会自动调用原类的display方法
    $image->display();

    echo PHP_EOL;

    $image->display();

})();

