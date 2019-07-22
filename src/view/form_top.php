<?php
$html = '<form name="plugs" method="post" action="http://'.$_SERVER['HTTP_HOST'].'">';
if($playing === 'true'){
  $style_start = '4';
  $style_stop = '3';
}else{
  $style_start = '1';
  $style_stop = '4';
}
$html .= '<button class="button button_50 button'.$style_start.'" name="action" value="start">Start</button>';
$html .= '<button class="button button_50 button'.$style_stop.'" name="action" value="stop">Stop</button><br />';
$html .= '<button class="button button_50 button2" name="action" value="set">New Playlist</button>';
$html .= '<button class="button button_50 button2" name="action" value="clear">Clear Playlist</button><br />';
if($playing === 'true'){
  $html .= '<span class="button_50 button1">playing: Yes</span>';
}else{
  $html .= '<span class="button_50 button4">playing: No</span>';
}
$html .= '<a class="button_50 button4" href="#skip-'.$currentIndex.'">Track #: '.$currentIndex . '</a><br>';
$html .= '</form>';
