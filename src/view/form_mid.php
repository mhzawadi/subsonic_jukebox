<?php

$wordwrap = 60;

$song_list = $songs['jukeboxPlaylist']['entry'];
$html_list = '';
foreach($song_list as $key => $song){
  $track = $song['@attributes']['title'] .
  ' <i>By</i> ' . $song['@attributes']['artist'] .
  ' <i>From</i> '. $song['@attributes']['album'];
  $html_list .= '  <a id="track-'.$key.'" class="jump"></a>'."\n";
  $html_list .= '<form name="track-'.$key.'" method="post" action="'.$this->settings['URL'].'">'."\n";
  $html_list .= '<input type="hidden" name="id" value="'.$key.'">'."\n";
  if("$key" === "$currentIndex"){
    $html_list .= '<div class="button1">'."\n";
    if($playing === 'true'){
      $playing_track_btn .= '<button class="button button3" name="action" value="stop">Stop</button>'."\n";
    }else{
      $playing_track_btn .= '<button class="button button1" name="action" value="start">Play</button>'."\n";
    }
    $playing_track = '<div class="button1">'.
    $playing_track_btn.
        wordwrap($track, $wordwrap, "<br />\n") .
    '</div>'."\n"."\n";
    $playing_track .= '<hr />'."\n";
  }else{
    $html_list .= '<div class="button4">'."\n";
  }

  $html_list .= '<button class="button button2" name="action" value="skip">Play</button>'."\n";
  $html_list .= $track .
  '</div>'."\n"."\n";
  $html_list .= '</form>'."\n";
}
$html .= $playing_track.'<div class="list" id="tracks">'.$html_list.'</div>';
