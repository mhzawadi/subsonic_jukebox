<?php

$song_list = $songs['jukeboxPlaylist']['entry'];
foreach($song_list as $key => $song){
  $html_list = '  <a id="track-'.$key.'" class="jump"></a>'."\n";
  $html_list .= '<form name="track-'.$key.'" method="post" action="'.$this->settings['URL'].'">'."\n";
  $html_list .= '<input type="hidden" name="id" value="'.$key.'">'."\n";
  if("$key" === "$currentIndex"){
    $html_list .= '<div class="button1">'."\n";
    $playing_track = '<div class="button1">'.
    '  Now Playing: <br>'.
    '  &nbsp;&nbsp;&nbsp;Tite: <button class="button_title" name="action" value="skip">'.
        $song['@attributes']['title'] .
    '  &nbsp;&nbsp;&nbsp;</button>' . '<br>'.
    '  &nbsp;&nbsp;&nbsp;Album: '.$song['@attributes']['album'] . '<br>' .
    '  &nbsp;&nbsp;&nbsp;Artist: ' . $song['@attributes']['artist'] .
    '</div>'."\n"."\n";
  }else{
    $html_list .= '<div class="button4">'."\n";
  }
  $html_list .= '  Tite: <button class="button_title" name="action" value="skip">'.
      $song['@attributes']['title'] .
  '  </button>' . '<br>'.
  '  Album: '.$song['@attributes']['album'] . '<br>' .
  '  Artist: ' . $song['@attributes']['artist'] .
  '</div>'."\n"."\n";
  $html_list .= '</form>'."\n";
}
$html .= $playing_track.$html_list;
