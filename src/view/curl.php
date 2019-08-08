<?php
  $song_list = $songs['jukeboxPlaylist']['entry'];
  $end = count($song_list);
  if($end < 1){
    $html = 'No songs in playlist'."\n";
  }elseif($this->id === 'all'){
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
}else{
  foreach($song_list as $key => $song){
    $track .= $song['@attributes']['title'].$this->color->colorize(' From ', array($this->color::MAGENTA,)).
             $song['@attributes']['album'].$this->color->colorize(' By ', array($this->color::MAGENTA,)).
             $song['@attributes']['artist']."\n";

    if("$key" === "$currentIndex" && $playing === 'true'){
      $html .= $this->color->colorize('Playing #'.$currentIndex.': ', array($this->color::MAGENTA));
      $html .= $track;
      $row = 0;
    }elseif("$key" === "$currentIndex" && $playing === 'false'){
      $html .= $this->color->colorize('Start #'.$currentIndex.': ', array($this->color::MAGENTA));
      $html .= $track;
      $row = 0;
    }elseif($row < $this->id){
      $html .= $this->color->colorize('Track #'.$key.': ', array($this->color::MAGENTA));
      $html .= $track;
      $row++;
    }else{
      $html .= '';
    }
  }

}
