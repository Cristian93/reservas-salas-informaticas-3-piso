<?php

class CHARACTER_SETSDTO{

    private $CHARACTER_SET_NAME;
    private $DEFAULT_COLLATE_NAME;
    private $DESCRIPTION;
    private $MAXLEN;

    function getCHARACTER_SET_NAME(){
       return $this->CHARACTER_SET_NAME;
    }

    function getDEFAULT_COLLATE_NAME(){
       return $this->DEFAULT_COLLATE_NAME;
    }

    function getDESCRIPTION(){
       return $this->DESCRIPTION;
    }

    function getMAXLEN(){
       return $this->MAXLEN;
    }

    function setCHARACTER_SET_NAME($CHARACTER_SET_NAME){
        $this->CHARACTER_SET_NAME = $CHARACTER_SET_NAME;
    }

    function setDEFAULT_COLLATE_NAME($DEFAULT_COLLATE_NAME){
        $this->DEFAULT_COLLATE_NAME = $DEFAULT_COLLATE_NAME;
    }

    function setDESCRIPTION($DESCRIPTION){
        $this->DESCRIPTION = $DESCRIPTION;
    }

    function setMAXLEN($MAXLEN){
        $this->MAXLEN = $MAXLEN;
    }

}