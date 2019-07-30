<?php
$html = '<form name="plugs" method="post" action="'.$settings['URL'].'">'."\n";
if($playing === 'true'){
  $html .= '<button class="button button3" name="action" value="stop">Stop</button>'."\n";
}else{
  $html .= '<button class="button button1" name="action" value="start">Start</button>'."\n";
}
$html .= '<button class="button button2" name="action" value="set">New Playlist</button>'."\n";
$html .= '<button class="button button2" name="action" value="clear">Clear Playlist</button>'."\n";
$html .= '<a class="button4" href="#track-'.$currentIndex.'">Track #: '.$currentIndex . '</a>'."\n";
$html .= '</form>'."\n";
