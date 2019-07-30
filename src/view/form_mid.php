<?php

$song_list = $songs['jukeboxPlaylist']['entry'];
foreach($song_list as $key => $song){
  $html .= '  <a id="track-'.$key.'" class="jump"></a>'."\n";
  $html .= '<form name="track-'.$key.'" method="post" action="'.$settings['URL'].'">'."\n";
  $html .= '<input type="hidden" name="id" value="'.$key.'">'."\n";
  if("$key" === "$currentIndex"){
    $html .= '<div class="button1">'."\n";
  }else{
    $html .= '<div class="button4">'."\n";
  }
  $html .= '  Tite: <button class="button_title" name="action" value="skip">'.
      $song['@attributes']['title'] .
  '  </button>' . '<br>'.
  '  Album: '.$song['@attributes']['album'] . '<br>' .
  '  Artist: ' . $song['@attributes']['artist'] .
  '</div>'."\n"."\n";
  $html .= '</form>'."\n";
}
