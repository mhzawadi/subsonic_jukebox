<?php
$html = '<form name="plugs" method="post" action="'.$this->settings['URL'].'">'."\n";
if($playing === 'true'){
  $html .= '<button class="button button3" name="action" value="stop">Stop</button>'."\n";
}else{
  $html .= '<button class="button button1" name="action" value="start">Start</button>'."\n";
}
$html .= '<button class="button button2" name="action" value="set">New List</button>'."\n";
$html .= '<button class="button button2" name="action" value="clear">Clear List</button><br>'."\n";
$html .= '<button class="button button2" name="action" value="prev">Prev</button>'."\n";
$html .= '<a class="button4" href="#track-'.$currentIndex.'">Track #: '.$currentIndex . '</a>'."\n";
$html .= '<button class="button button2" name="action" value="next">Next</button>'."\n";
$html .= '<input type="hidden" name="prev" value="'.($currentIndex-1).'">'."\n";
$html .= '<input type="hidden" name="next" value="'.($currentIndex+1).'">'."\n";
$html .= '</form>'."\n";
