<?php

namespace MHorwood\Jukebox\model;

use MHorwood\Jukebox\classes\radio;

class RadioModel {
  private $radio;

  public function __construct() {
    $this->radio = new radio();
  }
}
