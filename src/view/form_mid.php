<?php

$song_list = $songs['jukeboxPlaylist']['entry'];
foreach($song_list as $key => $song){
  if("$key" === "$currentIndex"){
    $html .= '<div class="button1">';
  }else{
    $html .= '<div class="button4">';
  }
  $html .= '  <a id="skip-'.$key.'" class="jump"></a>' .
  '  <button class="button button_title" name="action" value="skip-'.$key.'">Tite: '.
      $song['@attributes']['title'] .
  '  </button>' . '<br>'.
  '  Album: '.$song['@attributes']['album'] . '<br>' .
  '  Artist: ' . $song['@attributes']['artist'] .
  '</div>'."\n";
}
