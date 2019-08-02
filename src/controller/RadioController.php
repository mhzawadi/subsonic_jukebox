<?php

namespace MHorwood\Jukebox\controller;

use MHorwood\Jukebox\model\RadioModel;

class RadioController{

  private $RadioModel;
  protected $html;

  public function __construct() {
    $this->RadioModel = new RadioModel();
  }
}
