<?php
  $song_list = $songs['jukeboxPlaylist']['entry'];
  foreach($song_list as $key => $song){
    if("$key" === "$currentIndex"){
      if($playing === 'true'){
        $html .= $this->color->colorize('Playing #'.$currentIndex.': ', array(35));
      }else{
        $html .= $this->color->colorize('Next Track #'.$currentIndex.': ', array(35));
      }
      $html .= $song['@attributes']['title'].$this->color->colorize(' From ', array(35,)).
          $song['@attributes']['album'].$this->color->colorize(' By ', array(35,)).$song['@attributes']['artist']."\n";
    }elseif($key === ($currentIndex-1) && $playing === 'true'){
      $html .= $this->color->colorize('Last Track #'.($currentIndex-1).': ', array(35));
      $html .= $song['@attributes']['title'].$this->color->colorize(' From ', array(35,)).
          $song['@attributes']['album'].$this->color->colorize(' By ', array(35,)).$song['@attributes']['artist']."\n";
    }elseif($key === ($currentIndex+1) && $playing === 'true'){
      $html .= $this->color->colorize('Next Track #'.($currentIndex+1).': ', array(35));
      $html .= $song['@attributes']['title'].$this->color->colorize(' From ', array(35,)).
          $song['@attributes']['album'].$this->color->colorize(' By ', array(35,)).$song['@attributes']['artist'];
    }
  }
