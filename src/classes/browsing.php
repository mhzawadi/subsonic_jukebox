<?php

namespace MHorwood\Jukebox\classes;

use MHorwood\Jukebox\classes\subsonic;

class browsing extends subsonic {

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

  /*
    Returns all configured top-level music folders. Takes no extra parameters.
    Returns a <subsonic-response> element with a nested <musicFolders> element on success.
    */
  public function getMusicFolders (){}

  /*
    Returns an indexed structure of all artists.

    | Parameter | Required | Default | Comment |
    | `musicFolderId` | No |  | If specified, only return artists in the music folder with the given ID. See `getMusicFolders`. |
    | `ifModifiedSince` | No | | If specified, only return a result if the artist collection has changed since the given time (in milliseconds since 1 Jan 1970). |

    Returns a <subsonic-response> element with a nested <indexes> element on success.
  */
  public function getIndexes (){}

  /*
    Returns a listing of all files in a music directory. Typically used to get list of albums for an artist, or list of songs for an album.

    | Parameter | Required | Default | Comment |
    | id | Yes | | A string which uniquely identifies the music folder. Obtained by calls to getIndexes or getMusicDirectory.|

    Returns a <subsonic-response> element with a nested <directory> element on success.
  */
  public function getMusicDirectory (){}
  public function getGenres (){}
  public function getArtists (){}
  public function getArtist (){}
  public function getAlbum (){}
  public function getSong (){}
  public function getVideos (){}
  public function getVideoInfo (){}
  public function getArtistInfo (){}
  public function getArtistInfo2 (){}
  public function getAlbumInfo (){}
  public function getAlbumInfo2 (){}
  public function getSimilarSongs (){}
  public function getSimilarSongs2 (){}
  public function getTopSongs (){}

 }
