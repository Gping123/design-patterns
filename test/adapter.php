<?php

use Src\Adapter\AudioPlayer;

require_once __DIR__ . '/../vendor/autoload.php';

(function(){
    $audioPlayer = new AudioPlayer();

    $audioPlayer->play('mp3', "heworld.mp3");
    $audioPlayer->play('mp4', '黑客帝国.mp4');
    $audioPlayer->play('vlc', 'farfarc.vlc');
    $audioPlayer->play('avi', 'aviavia.avi');

})();
