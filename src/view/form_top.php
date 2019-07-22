<?php
$html = '<form name="plugs" method="post" action="http://'.$_SERVER['HTTP_HOST'].'">';
if($playing === 'true'){
  $html .= '<button class="button button3'.$style_stop.'" name="action" value="stop">Stop</button>';
}else{
  $html .= '<button class="button button1'.$style_start.'" name="action" value="start">Start</button>';
}


$html .= '<button class="button button2" name="action" value="set">New Playlist</button>';
$html .= '<button class="button button2" name="action" value="clear">Clear Playlist</button>';
$html .= '<a class="button4" href="#skip-'.$currentIndex.'">Track #: '.$currentIndex . '</a>';
