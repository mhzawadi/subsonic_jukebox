<?php

if($this->set_color === '0'){
  $color = Null;
}else{
  $color = array($this->color::BOLD,$this->color::MAGENTA);
}

$song_list = $songs['jukeboxPlaylist']['entry'];
$end = count($song_list);
if($end < 1){
  $html = 'No songs in playlist'."\n";
}elseif($this->id === 'all'){
  foreach($song_list as $key => $song){
    if("$key" === "$currentIndex" && $playing === 'true'){
      $html .= $this->color->colorize('Playing #'.$currentIndex.': ', $color);
    }else{
      $html .= $this->color->colorize('Track #'.$key.': ', $color);
    }
    $html .= $song['@attributes']['title'].$this->color->colorize(' From ', $color).
             $song['@attributes']['album'].$this->color->colorize(' By ', $color).
             $song['@attributes']['artist']."\n";
  }
  $html .= 'Next: https://'.$this->settings['URL'].'/?action=skip&id='.($currentIndex++)."\n";
}else{
  $row = $end;
  foreach($song_list as $key => $song){
    $track = $song['@attributes']['title'].$this->color->colorize(' From ', $color).
             $song['@attributes']['album'].$this->color->colorize(' By ', $color).
             $song['@attributes']['artist']."\n";

    if("$key" === "$currentIndex" && $playing === 'true'){
      $html .= $this->color->colorize('Playing #'.$currentIndex.': ', $color);
      $html .= $track;
      $row = 1;
    }elseif("$key" === "$currentIndex" && $playing === 'false'){
      $html .= $this->color->colorize('Start #'.$currentIndex.': ', $color);
      $html .= $track;
      $row = 1;
    }elseif($row < $this->id){
      $html .= $this->color->colorize('Track #'.$key.': ', $color);
      $html .= $track;
      $row++;
    }else{
      $html .= '';
    }
  }
  $html .= 'Next: https://'.$this->settings['URL'].'/?action=skip&id='.($currentIndex++)."\n";
}
