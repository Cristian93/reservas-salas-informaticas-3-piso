<?php

class COLLATIONSDTO{

    private $COLLATION_NAME;
    private $CHARACTER_SET_NAME;
    private $ID;
    private $IS_DEFAULT;
    private $IS_COMPILED;
    private $SORTLEN;

    function getCOLLATION_NAME(){
       return $this->COLLATION_NAME;
    }

    function getCHARACTER_SET_NAME(){
       return $this->CHARACTER_SET_NAME;
    }

    function getID(){
       return $this->ID;
    }

    function getIS_DEFAULT(){
       return $this->IS_DEFAULT;
    }

    function getIS_COMPILED(){
       return $this->IS_COMPILED;
    }

    function getSORTLEN(){
       return $this->SORTLEN;
    }

    function setCOLLATION_NAME($COLLATION_NAME){
        $this->COLLATION_NAME = $COLLATION_NAME;
    }

    function setCHARACTER_SET_NAME($CHARACTER_SET_NAME){
        $this->CHARACTER_SET_NAME = $CHARACTER_SET_NAME;
    }

    function setID($ID){
        $this->ID = $ID;
    }

    function setIS_DEFAULT($IS_DEFAULT){
        $this->IS_DEFAULT = $IS_DEFAULT;
    }

    function setIS_COMPILED($IS_COMPILED){
        $this->IS_COMPILED = $IS_COMPILED;
    }

    function setSORTLEN($SORTLEN){
        $this->SORTLEN = $SORTLEN;
    }

}