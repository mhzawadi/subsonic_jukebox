<?php

namespace MHorwood\Jukebox;

use MHorwood\Jukebox\controller\JukeboxController;

require __DIR__ . '/../../vendor/autoload.php';
require_once(__DIR__ . '/../config/config.php');

$REQUEST = \explode('?', $_SERVER['REQUEST_URI']);
$REQUEST_URI = \explode('/', $REQUEST[0]);
if($REQUEST_URI[0] === ''){
  array_shift($REQUEST_URI);
  $args = \array_merge($REQUEST_URI, $_GET, $_POST);
}else{
  $args = \array_merge($_GET, $_POST);
}

print_r($args);

$html = '';
$jukebox_control = new JukeboxController($settings, $_SERVER['HTTP_USER_AGENT']);

$jukebox_control->process_action($args);
$html = $jukebox_control->getHTML();

echo $html;
