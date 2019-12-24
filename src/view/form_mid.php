<?php

$wordwrap = 35;

$song_list = $songs['jukeboxPlaylist']['entry'];
$html_list = '';
foreach($song_list as $key => $song){
  $html_list .= '  <a id="track-'.$key.'" class="jump"></a>'."\n";
  $html_list .= '<form name="track-'.$key.'" method="post" action="'.$this->settings['URL'].'">'."\n";
  $html_list .= '<input type="hidden" name="id" value="'.$key.'">'."\n";
  if("$key" === "$currentIndex"){
    $html_list .= '<div class="button1">'."\n";
    $playing_track = '<div class="button1">'.
    '  Now Playing: <br>'.
    '  &nbsp;&nbsp;&nbsp;Tite: <button class="button_title" name="action" value="skip">'.
        wordwrap($song['@attributes']['title'], $wordwrap, "<br />\n") .
    '  &nbsp;&nbsp;&nbsp;</button>' . '<br>'.
    '  &nbsp;&nbsp;&nbsp;Album: '. wordwrap($song['@attributes']['album'], $wordwrap, "<br />\n") . '<br>' .
    '  &nbsp;&nbsp;&nbsp;Artist: ' . wordwrap($song['@attributes']['artist'], $wordwrap, "<br />\n") .
    '</div>'."\n"."\n";
    $html_list .= '<hr />'."\n";
  }else{
    $html_list .= '<div class="button4">'."\n";
  }

  $html_list .= '  Tite: <button class="button_title" name="action" value="skip">'.
      wordwrap($song['@attributes']['title'], $wordwrap, "<br />\n") .
  '  </button>' . '<br>'.
  '  Album: '. wordwrap($song['@attributes']['album'], $wordwrap, "<br />\n") . '<br>' .
  '  Artist: ' . wordwrap($song['@attributes']['artist'], $wordwrap, "<br />\n") .
  '</div>'."\n"."\n";
  $html_list .= '</form>'."\n";
}
$html .= $playing_track.$html_list;
