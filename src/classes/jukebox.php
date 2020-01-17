<?php

namespace MHorwood\Jukebox\classes;

use MHorwood\Jukebox\classes\subsonic;

class jukebox extends subsonic {

  private $SubADDR;
  private $SubUSER;
  private $SubPASS;
  private $SubSALT;
  private $SubVER;
  private $SubCLI;

  /**
   * Build Object
   **/
   function __construct($settings){
     $this->SubADDR = $settings['Sub']['ADDR'];
     $this->SubUSER = $settings['Sub']['USER'];
     $this->SubPASS = $settings['Sub']['PASS'];
     $this->SubSALT = $settings['Sub']['SALT'];
     $this->SubVER = $settings['Sub']['VER'];
     $this->SubCLI = $settings['Sub']['CLI'];
   }

  /*
   * Control the jukebox
   * $action: what action to take (get, status, set, start, stop, skip, add, clear, remove, shuffle, setGain)
   * $index: Zero-based index of the song to skip to or remove
   * $offset: Start playing this many seconds into the track
   * $id: string of IDs to add to the jukebox playlist (set is similar to a clear followed by a add, but will not change the currently playing track.)
   * $gain: to control the playback volume. A float value between 0.0 and 1.0
   */
  public function jukeboxControl(string $action, int $index = 0, int $offset = 0 , string $id = '', float $gain = 0.0){
    switch ($action) {
      case 'add':
          return $this->connect($this->SubADDR.'/rest/jukeboxControl.view'.'?u='.$this->SubUSER.'&t='.
            $this->SubPASS.'&s='.$this->SubSALT.'&v='.$this->SubVER.'&c='.$this->SubCLI.'&action='.$action.'&'.$id);
          break;
      case 'set':
          return $this->connect($this->SubADDR.'/rest/jukeboxControl.view'.'?u='.$this->SubUSER.'&t='.
            $this->SubPASS.'&s='.$this->SubSALT.'&v='.$this->SubVER.'&c='.$this->SubCLI.'&action='.$action.'&'.$id);
          break;
      case 'skip':
        return $this->connect($this->SubADDR.'/rest/jukeboxControl.view'.'?u='.$this->SubUSER.'&t='.
          $this->SubPASS.'&s='.$this->SubSALT.'&v='.$this->SubVER.'&c='.$this->SubCLI.'&action='.$action.'&index='.$index);
        break;
      case 'remove':
        return $this->connect($this->SubADDR.'/rest/jukeboxControl.view'.'?u='.$this->SubUSER.'&t='.
          $this->SubPASS.'&s='.$this->SubSALT.'&v='.$this->SubVER.'&c='.$this->SubCLI.'&action='.$action.'&index='.$index);
        break;
      case 'setGain':
        return $this->connect($this->SubADDR.'/rest/jukeboxControl.view'.'?u='.$this->SubUSER.'&t='.
          $this->SubPASS.'&s='.$this->SubSALT.'&v='.$this->SubVER.'&c='.$this->SubCLI.'&action='.$action.'&gain='.$gain);
        break;
      default:
        return $this->connect($this->SubADDR.'/rest/jukeboxControl.view'.'?u='.$this->SubUSER.'&t='.
          $this->SubPASS.'&s='.$this->SubSALT.'&v='.$this->SubVER.'&c='.$this->SubCLI.'&action='.$action.'');
        break;
    }

  }
}
