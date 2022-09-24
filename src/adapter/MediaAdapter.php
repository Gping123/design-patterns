<?php

namespace Src\Adapter;

class MediaAdapter implements MediaPlayer
{
    /**
     * advanceMediaPlayer variable
     *
     * @var AdvancedMediaPlayer $advanceMediaPlayer
     */
    protected $advanceMediaPlayer;

    /**
     * __construct function
     *
     * @param string $audioType
     */
    public function __construct(string $audioType)
    {
        switch(strtolower($audioType)) {
            case 'vlc':
                $this->advanceMediaPlayer = new VlcPlayer();
                break;
            case 'mp4':
                $this->advanceMediaPlayer = new Mp4Player();
                break;
        }
    }

    /**
     * play function
     * 播放
     * @param string $audioType
     * @param string $fileName
     * @return void
     */
    public function play(string $audioType, string $fileName) : void
    {
        switch(strtolower($audioType)) {
            case 'vlc':
                $this->advanceMediaPlayer->playVlc($fileName);
                break;
            case 'mp4':
                $this->advanceMediaPlayer->playMp4($fileName);
                break;
        }
    }

}

