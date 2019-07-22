<?php

namespace MHorwood\Jukebox;

use MHorwood\Jukebox\controller\JukeboxController;

require __DIR__ . '/../../vendor/autoload.php';
require_once(__DIR__ . '/../config/config.php');
include('../view/header.php');
include('../view/footer.php');

$html = '';
$jukebox_control = new JukeboxController($Sub);

if(isset($_POST['action'])){
    $jukebox_control->process_action($_POST['action']);
    $html = $jukebox_control->getHTML();
}else{
    $jukebox_control->load_songs();
    $html = $jukebox_control->getHTML();
}


echo $header.$html.$footer;
