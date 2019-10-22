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

    | Parameter         | Required | Default | Comment |
    | `musicFolderId`   | No       |         | If specified, only return artists in the music folder with the given ID. See `getMusicFolders`. |
    | `ifModifiedSince` | No       |         | If specified, only return a result if the artist collection has changed since the given time (in milliseconds since 1 Jan 1970). |

    Returns a <subsonic-response> element with a nested <indexes> element on success.
  */
  public function getIndexes (){}

  /*
    Returns a listing of all files in a music directory. Typically used to get list of albums for an artist, or list of songs for an album.

    | Parameter | Required | Default | Comment |
    | id        | Yes      |         | A string which uniquely identifies the music folder. Obtained by calls to getIndexes or getMusicDirectory.|

    Returns a <subsonic-response> element with a nested <directory> element on success.
  */
  public function getMusicDirectory (){}

  /*
    Returns all genres.

    Returns a <subsonic-response> element with a nested <genres> element on success.
  */
  public function getGenres (){}

  /*
    Similar to getIndexes, but organizes music according to ID3 tags.

    Parameter     | Required | Default | Comment
    musicFolderId | No       |         | If specified, only return artists in the music folder with the given ID. See getMusicFolders.
    Returns a <subsonic-response> element with a nested <artists> element on success.
  */
  public function getArtists (){}

  /*
    Returns details for an artist, including a list of albums. This method organizes music according to ID3 tags.

    Parameter | Required | Default | Comment
    id        | Yes      |         | The artist ID.
    Returns a <subsonic-response> element with a nested <artist> element on success.
  */
  public function getArtist (){}

  /*
    Returns details for an album, including a list of songs. This method organizes music according to ID3 tags.

    Parameter | Required | Default | Comment
    id        | Yes      |         | The album ID.
    Returns a <subsonic-response> element with a nested <album> element on success.
  */
  public function getAlbum (){}

  /*
    Returns details for a song.

    Parameter | Required | Default | Comment
    id        | Yes      |         | The song ID.
    Returns a <subsonic-response> element with a nested <song> element on success.
  */
  public function getSong (){}

  /*
  Returns all video files.

  Returns a <subsonic-response> element with a nested <videos> element on success.
  */
  public function getVideos (){}

  /*
  Returns details for a video, including information about available audio tracks, subtitles (captions) and conversions.

  Parameter | Required | Default | Comment
  id        | Yes      |         | The video ID.
  Returns a <subsonic-response> element with a nested <videoInfo> element on success.
  */
  public function getVideoInfo (){}

  /*
  Returns artist info with biography, image URLs and similar artists, using data from last.fm.

  Parameter         | Required | Default | Comment
  id                | Yes      |         | The artist, album or song ID.
  count             | No       | 20      | Max number of similar artists to return.
  includeNotPresent | No       | false   | Whether to return artists that are not present in the media library.
  Returns a <subsonic-response> element with a nested <artistInfo> element on success.
  */
  public function getArtistInfo (){}

  /*
  Similar to getArtistInfo, but organizes music according to ID3 tags.

  Parameter         | Required | Default | Comment
  id                | Yes      |         | The artist ID.
  count             | No       | 20      | Max number of similar artists to return.
  includeNotPresent | No       | false   | Whether to return artists that are not present in the media library.
  Returns a <subsonic-response> element with a nested <artistInfo2> element on success.
  */
  public function getArtistInfo2 (){}

  /*
    Returns album notes, image URLs etc, using data from last.fm.

  Parameter | Required | Default | Comment
  id        | Yes      |         | The album or song ID.
  Returns a <subsonic-response> element with a nested <albumInfo> element on success
  */
  public function getAlbumInfo (){}

  /*
  Similar to getAlbumInfo, but organizes music according to ID3 tags.

  Parameter | Required | Default | Comment
  id        | Yes      |         | The album ID.
  Returns a <subsonic-response> element with a nested <albumInfo> element on success.
  */
  public function getAlbumInfo2 (){}

  /*
  Returns a random collection of songs from the given artist and similar artists, using data from last.fm. Typically used for artist radio features.

  Parameter | Required | Default | Comment
  id        | Yes      |         | The artist, album or song ID.
  count     | No       | 50      | Max number of songs to return.
  Returns a <subsonic-response> element with a nested <similarSongs> element on success.
  */
  public function getSimilarSongs (){}

  /*
  Similar to getSimilarSongs, but organizes music according to ID3 tags.

  Parameter | Required | Default | Comment
  id        | Yes      |         | The artist ID.
  count     | No       | 50      | Max number of songs to return.
  Returns a <subsonic-response> element with a nested <similarSongs2> element on success.
  */
  public function getSimilarSongs2 (){}

  /*
  Returns top songs for the given artist, using data from last.fm.

  Parameter | Required | Default | Comment
  artist    | Yes      |         | The artist name.
  count     | No       | 50      | Max number of songs to return.
  Returns a <subsonic-response> element with a nested <topSongs> element on success.
  */
  public function getTopSongs (){}

 }
