<?php

namespace MHorwood\Jukebox;

use MHorwood\Jukebox\controller\JukeboxController;

require __DIR__ . '/../../vendor/autoload.php';
require_once(__DIR__ . '/../config/config.php');

$html = '';
$jukebox_control = new JukeboxController($Sub, $_SERVER['HTTP_USER_AGENT']);

if(isset($_POST['action'])){
  if(isset($_POST['id'])){
    $id = $_POST['id'];
  }elseif(substr($_POST['action'], 0, 4) === 'skip' ){
    $id_parts = \explode('-', $_POST['action']);
    $id = $id_parts[1];
    $_POST['action'] = 'skip';
  }else{
    $id = '';
  }

  $jukebox_control->process_action($_POST['action'], $id);
  $html = $jukebox_control->getHTML();
}else{
  $jukebox_control->load_songs();
  $html = $jukebox_control->getHTML();
}


echo $html;
