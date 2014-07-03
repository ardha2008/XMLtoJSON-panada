<?php 


/**
*	XML To Json
*	@copy 2014 
*   Ardha Herdianto
*
*/

namespace Libraries;
use Resources;

class XmlJson{
    
    function __construct(){
    	
    }

    function getxml($content) {
        $result = file_get_contents($content);
        $result = str_replace(array("\n", "\r", "\t"), '', $result);
        $result = trim(str_replace('"', "'", $result));
        $result = simplexml_load_string($result);
        $result = json_encode($result);
        return $result;
    }

}