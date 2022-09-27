<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Src\Template\Cricket;
use Src\Template\Football;

(function(){

    $game = new Cricket();

    $game->play();

    echo ''.PHP_EOL;

    $game = new Football();
    $game->play();


})();
