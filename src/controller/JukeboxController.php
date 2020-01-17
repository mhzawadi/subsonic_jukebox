<?php

namespace MHorwood\Jukebox\controller;

use MHorwood\Jukebox\model\JukeboxModel;
use MHorwood\Jukebox\model\CurlModel;

class JukeboxController{

  private $JukeboxModel;
  protected $html;

  public function __construct($settings, $HTTP_USER_AGENT) {
    if(strpos($HTTP_USER_AGENT, 'curl') !== false){
      $this->JukeboxModel = new CurlModel($settings);
    }else{
      $this->JukeboxModel = new JukeboxModel($settings);
    }
  }

  public function getHTML() {
      return $this->html;
  }

  public function process_action($args){
    if($args['action'] !== ''){
      $this->html = $this->JukeboxModel->action($args);
    }else{
      $this->html = '';
    }
  }

}
