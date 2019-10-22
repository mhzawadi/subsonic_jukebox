<?php

namespace MHorwood\Jukebox\model;

class ArtistModel {
  private $Subsonic;
  private $settings;

  public function __construct($Subsonic, $settings) {
    $this->settings = $settings;
    $this->Subsonic= $Subsonic;
  }

  public function action($args){
    
  }
}
