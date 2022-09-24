<?php

namespace Src\Adapter;

class Mp4Player implements AdvancedMediaPlayer
{
    /**
     * playVlc function
     * vlc格式
     * @param string $fileName
     * @return void
     */
    public function playVlc(string $fileName) : void
    {
        echo '不支持格式'.PHP_EOL;
    }

    /**
     * playMp4 function
     * mp4格式播放
     * @param string $fileName
     * @return void
     */
    public function playMp4(string $fileName) : void
    {
        echo '播放MP4格式文件' . $fileName . PHP_EOL;
    }

}

