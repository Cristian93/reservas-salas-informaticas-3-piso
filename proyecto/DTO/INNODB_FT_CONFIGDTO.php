<?php

class INNODB_FT_CONFIGDTO{

    private $KEY;
    private $VALUE;

    function getKEY(){
       return $this->KEY;
    }

    function getVALUE(){
       return $this->VALUE;
    }

    function setKEY($KEY){
        $this->KEY = $KEY;
    }

    function setVALUE($VALUE){
        $this->VALUE = $VALUE;
    }

}