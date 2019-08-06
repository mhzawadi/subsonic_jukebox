<?php

namespace MHorwood\Jukebox\model;

use MHorwood\Jukebox\classes\jukebox;
use MHorwood\Jukebox\classes\lists;
use MHorwood\Jukebox\classes\AsciiColorizer;

class CurlModel {
  private $Subsonic;
  private $lists;
  private $jukebox;
  private $settings;

  public function __construct($Subsonic, $settings) {
    $this->lists = new lists($Subsonic);
    $this->jukebox = new jukebox($Subsonic);
    $this->color = new AsciiColorizer();
    $this->settings = $settings;
  }

  // Process the action
  // Will nedd to add HTML builder here also
  public function action($action, $id){
    switch ($action) {
        case 'add':
            $xml = $this->lists->getRandomSongs(50, 1);
            $songs = $xml['randomSongs']['song'];
            $ids = array();
            foreach ($songs as $key => $song) {
                $xml = $this->jukebox->jukeboxControl('add', 0, 0, 'id='.$song['@attributes']['id']);
            }
            if($this->check_status($xml) === true){
              $html = $this->build_html($this->jukebox->jukeboxControl('get'));
            }
            return $html;
            break;
        case 'set':
            $xml = $this->lists->getRandomSongs(50, 1);
            $songs = $xml['randomSongs']['song'];
            $ids = array();
            foreach ($songs as $key => $song) {
              $ids[] = 'id='.$song['@attributes']['id'];
            }
            $xml = $this->jukebox->jukeboxControl('set', 0, 0, \implode('&', $ids));
            if($this->check_status($xml) === true){
              $html = $this->build_html($this->jukebox->jukeboxControl('get'));
            }
            return $html;
            break;
        case 'skip';
          $xml = $this->jukebox->jukeboxControl('skip', $id);
          if($this->check_status($xml) === true){
            $html = $this->build_html($this->jukebox->jukeboxControl('get'));
            return $html;
          }else{
            return 'ERROR! We didnt find that skip';
          }
          break;
        case 'get';
          $html = $this->build_html($this->jukebox->jukeboxControl('get'));
          return $html;
          break;
        default:
            $xml = $this->jukebox->jukeboxControl($action);
            if($this->check_status($xml) === true){
              $html = $this->build_html($this->jukebox->jukeboxControl('get'));
              return $html;
            }else{
              return 'ERROR! that didnt work';
            }
            break;
    }
  }

  // pritty print_r
  public function print_pre($input){
      $this->jukebox->print_pre($input);
  }

  // Build the HTML for the page
  private function build_html($songs){
    // $this->lists->print_pre($songs);
    $playing = $songs['jukeboxPlaylist']['@attributes']['playing'];
    $currentIndex = $songs['jukeboxPlaylist']['@attributes']['currentIndex'];
    if($currentIndex !== '-1'){
      include (__DIR__ . '/../view/curl.php');
      return $html;
    }else{
      return 'No songs in playlist';
    }
  }

  private function check_status($xml){
    if($xml['@attributes']['status'] === 'ok'){
      return true;
    }else{
      return false;
    }
  }
}
