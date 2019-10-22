<?php

namespace MHorwood\Jukebox\controller;

use MHorwood\Jukebox\model\JukeboxModel;
use MHorwood\Jukebox\model\ArtistModel;
use MHorwood\Jukebox\model\CurlModel;

class JukeboxController{

  private $JukeboxModel;
  private $ArtistModel;
  protected $html;

  public function __construct($Subsonic, $settings, $HTTP_USER_AGENT) {
    if(strpos($HTTP_USER_AGENT, 'curl') !== false){
      $this->JukeboxModel = new CurlModel($Subsonic, $settings);
    }else{
      $this->JukeboxModel = new JukeboxModel($Subsonic, $settings);
      $this->ArtistModel = new ArtistModel($Subsonic, $settings);
    }
  }

  public function getHTML() {
      return $this->html;
  }

  public function process_action($args){
    $this->html = '';
    if($args[0] === 'albums'){
      echo 'this will be an albums list';
    }if($args[0] === 'artists'){
      $this->html = $this->ArtistModel->action($args);
    }else{
      $this->html = $this->JukeboxModel->action($args);
    }
  }

}
