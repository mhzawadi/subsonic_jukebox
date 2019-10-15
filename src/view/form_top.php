<?php
$html = '<a href="/playlist">Playlist</a> <a href="/albums">Albums</a> <a href="/artists">Artists</a>'."\n";
$html .= '<form name="plugs" method="post" action="'.$this->settings['URL'].'">'."\n";
if($playing === 'true'){
  $html .= '<button class="button button_30 button3" name="action" value="stop">Stop</button>'."\n";
}else{
  $html .= '<button class="button button_30 button1" name="action" value="start">Play</button>'."\n";
}
$html .= '<button class="button button_30 button2" name="action" value="set">New List</button>'."\n";
$html .= '<button class="button button_30 button2" name="action" value="clear">Clear List</button><br>'."\n";
$html .= '<button class="button button_30 button2" name="action" value="prev">Prev</button>'."\n";
$html .= '<a class="button4" href="#track-'.$currentIndex.'">Track #: '.$currentIndex . '</a>'."\n";
$html .= '<button class="button button_30 button2" name="action" value="next">Next</button>'."\n";
$html .= '<input type="hidden" name="prev" value="'.($currentIndex-1).'">'."\n";
$html .= '<input type="hidden" name="next" value="'.($currentIndex+1).'">'."\n";
$html .= '</form>'."\n";
