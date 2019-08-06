<?php

namespace MHorwood\Jukebox;

use MHorwood\Jukebox\controller\JukeboxController;

require __DIR__ . '/../../vendor/autoload.php';
require_once(__DIR__ . '/../config/config.php');

$REQUEST_URI = \explode('/', $_SERVER['REQUEST_URI']);
if($REQUEST_URI[1] !== ''){
  $uri['action'] = $REQUEST_URI[1];
  $uri['id'] = $REQUEST_URI[2];
  $args = \array_merge($uri, $_GET, $_POST);
}else{
  $args = \array_merge($_GET, $_POST);
}

$html = '';
$jukebox_control = new JukeboxController($Sub, $_SERVER['HTTP_USER_AGENT']);

if(isset($args['action'])){
  if(isset($args['id'])){
    $id = $args['id'];
  }elseif(substr($args['action'], 0, 4) === 'skip' ){
    $id_parts = \explode('-', $args['action']);
    $id = $id_parts[1];
    $args['action'] = 'skip';
  }else{
    $id = '';
  }

  $jukebox_control->process_action($args['action'], $id);
  $html = $jukebox_control->getHTML();
}else{
  $jukebox_control->load_songs();
  $html = $jukebox_control->getHTML();
}


echo $html;
