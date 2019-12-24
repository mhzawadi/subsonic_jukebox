<?php

namespace MHorwood\Jukebox\controller;

use MHorwood\Jukebox\model\JukeboxModel;
use MHorwood\Jukebox\model\ArtistModel;
use MHorwood\Jukebox\model\CurlModel;

class JukeboxController{

  private $JukeboxModel;
  private $ArtistModel;
  protected $html;

  public function __construct($settings, $HTTP_USER_AGENT) {
    if(strpos($HTTP_USER_AGENT, 'curl') !== false){
      $this->JukeboxModel = new CurlModel($settings);
    }else{
      $this->JukeboxModel = new JukeboxModel($settings);
      $this->ArtistModel = new ArtistModel($settings);
    }
  }

  public function getHTML() {
      return $this->html;
  }

  public function process_action($args){
    $this->html = '';
    switch ($args[0]) {
      case 'playing_now':
        $this->html = $this->JukeboxModel->playing_now($args);
        break;
      case 'albums':
        $this->html = $this->JukeboxModel->albums($args);
        break;
      case 'artists':
        $this->html = $this->JukeboxModel->artists($args);
        break;
      default:
        $this->html = $this->JukeboxModel->jukebox($args);
        break;
    }
  }

}
