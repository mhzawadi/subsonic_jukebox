<?php

namespace MHorwood\Jukebox\classes;

use FFMpeg;
use Alchemy\BinaryDriver;

class radio {

  private $station;
  private $ffmpeg;

  public function __construct(){
    $this->ffmpeg = FFMpeg\FFMpeg::create();
    $this->ffmpeg->open('http://server.fantasyradio.co.uk:8300');
    $this->format = new pcm_s16leFormat();
    $this->format
      ->setAudioChannels(2)
      ->setAudioCodec('pcm_s16le');
    $this->ffmpeg->save($format, '/tmp/snapfifo');
  }
}

class pcm_s16leFormat extends FFMpeg\Format\Audio\DefaultAudio
{
    public function __construct($audioCodec = 'pcm_s16le')
    {
        $this
            ->setAudioCodec($audioCodec)
            ->setVideoCodec($videoCodec);
    }

    public function supportBFrames()
    {
        return false;
    }

    public function getAvailableAudioCodecs()
    {
        return array('pcm_s16le');
    }

    public function getAvailableVideoCodecs()
    {
        return array('pcm_s16le');
    }
}
