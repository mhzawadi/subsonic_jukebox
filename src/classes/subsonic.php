<?php

namespace MHorwood\Jukebox\classes;

abstract class subsonic{

    /**
     * connect to subsonic
     */
    function connect($path){
        try{
            //echo $path."\n";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$path);
            curl_setopt($ch, CURLOPT_FAILONERROR,1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
            $retValue = curl_exec($ch);
            curl_close($ch);
            return $this->xmlstring2array($retValue);
        } catch (Exception $e) {
            print ("<div class='alert alert-danger'>" . _('Error') . ": $error</div>");
        }
    }
    private function xmlstring2array($string){
        try{
          $xml   = new \SimpleXMLElement($string);
          $array = json_decode(json_encode((array)$xml), TRUE);
          return $array;
      }catch (Exception $e) {
          print ("<div class='alert alert-danger'>" . _('Error') . ": $e</div>");
      }
    }
    function print_pre($input){
        echo '<pre>';
        print_r($input);
        echo '</pre>';
    }
}
