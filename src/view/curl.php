<?php
  $song_list = $songs['jukeboxPlaylist']['entry'];
  if(count($song_list) < 1){
    $html = 'No songs in playlist';
  }else{
    foreach($song_list as $key => $song){
      if("$key" === "$currentIndex" && $playing === 'true'){
        $html .= $this->color->colorize('Playing #'.$currentIndex.': ', array($this->color::MAGENTA));
      }else{
        $html .= $this->color->colorize('Track #'.$key.': ', array($this->color::MAGENTA));
      }
      $html .= $song['@attributes']['title'].$this->color->colorize(' From ', array($this->color::MAGENTA,)).
               $song['@attributes']['album'].$this->color->colorize(' By ', array($this->color::MAGENTA,)).
               $song['@attributes']['artist']."\n";
    }
}
