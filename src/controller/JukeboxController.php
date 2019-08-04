<?php

namespace MHorwood\Jukebox\controller;

use MHorwood\Jukebox\model\JukeboxModel;

class JukeboxController{

  private $JukeboxModel;
  protected $html;

  public function __construct($Subsonic, $HTTP_USER_AGENT) {
    $this->JukeboxModel = new JukeboxModel($Subsonic, $HTTP_USER_AGENT);
  }

  public function getHTML() {
      return $this->html;
  }

  public function load_songs(){
    $this->html = $this->JukeboxModel->action('get', '');
  }

  public function process_action($action, $id){
    if($action !== ''){
      $this->html = $this->JukeboxModel->action($action, $id);
    }else{
      $this->html = '';
    }
  }

}
