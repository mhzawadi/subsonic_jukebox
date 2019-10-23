<?php

namespace MHorwood\Jukebox\classes;

use MHorwood\Jukebox\classes\subsonic;

class lists extends subsonic {

  private $SubADDR;
  private $SubUSER;
  private $SubPASS;
  private $SubSALT;
  private $SubVER;
  private $SubCLI;

  /**
   * Build Object
   **/
   function __construct($Subsonic){
     $this->SubADDR = $Subsonic['ADDR'];
     $this->SubUSER = $Subsonic['USER'];
     $this->SubPASS = $Subsonic['PASS'];
     $this->SubSALT = $Subsonic['SALT'];
     $this->SubVER = $Subsonic['VER'];
     $this->SubCLI = $Subsonic['CLI'];
   }

  public function getAlbumList(){}
  public function getAlbumList2(){}

  /*
   * Get a random list of songs
   * $size: INT the number of songs to get
   * $folderID: INT the folder to get songs from
   */
  public function getRandomSongs(int $size = 10 , int $folderID = 1, string $genre = '', int $fromYear = 0, int $toYear = 0){
    $folderID_url = '&musicFolderId='.$folderID;
    $genre_url = '';
    $fromYear_url = '';
    $toYear_url = '';
    if($genre !== ''){
      $genre_url = '&genre='.$genre;
    }
    if($fromYear !== 0){
      $fromYear_url = '&fromYear='.$fromYear;
    }
    if($toYear !== 0){
      $toYear_url = '&toYear='.$toYear;
    }
    return $this->connect($this->SubADDR.'/rest/getRandomSongs.view'.'?u='.$this->SubUSER.
    '&t='.$this->SubPASS.'&s='.$this->SubSALT.'&v='.$this->SubVER.'&c='.
    $this->SubCLI.'&size='.$size.$folderID_url.$genre_url.$fromYear_url.$toYear_url);

  }
  public function getSongsByGenre(){}

  /*
  Returns what is currently being played by all users. Takes no extra parameters.

  Returns a <subsonic-response> element with a nested <nowPlaying> element on success.
  */
  public function getNowPlaying(){
    return $this->connect($this->SubADDR.'/rest/getNowPlaying'.'?u='.$this->SubUSER.
    '&t='.$this->SubPASS.'&s='.$this->SubSALT.'&v='.$this->SubVER.'&c='.
    $this->SubCLI);
  }
  public function getStarred(){}
  public function getStarred2(){}

}
