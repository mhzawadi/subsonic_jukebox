<?php

$html = 'currentIndex: '.$xml['jukeboxStatus']['@attributes']['currentIndex']."\n";
$html .= 'playing: '.$xml['jukeboxStatus']['@attributes']['playing']."\n";
$html .= 'gain: '.$xml['jukeboxStatus']['@attributes']['gain'];
