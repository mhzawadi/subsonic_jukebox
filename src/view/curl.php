<?php
if($playing === 'true'){
  $song_list = $songs['jukeboxPlaylist']['entry'];
  foreach($song_list as $key => $song){
    if("$key" === "$currentIndex"){
      $html .= 'Playing: '.$song['@attributes']['title'].' From '.
          $song['@attributes']['album'].' By '.$song['@attributes']['artist'];
    }
  }
}else{
  $html .= 'not playing right now';
}
