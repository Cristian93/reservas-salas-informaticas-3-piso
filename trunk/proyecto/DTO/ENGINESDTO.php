<?php

class ENGINESDTO{

    private $ENGINE;
    private $SUPPORT;
    private $COMMENT;
    private $TRANSACTIONS;
    private $XA;
    private $SAVEPOINTS;

    function getENGINE(){
       return $this->ENGINE;
    }

    function getSUPPORT(){
       return $this->SUPPORT;
    }

    function getCOMMENT(){
       return $this->COMMENT;
    }

    function getTRANSACTIONS(){
       return $this->TRANSACTIONS;
    }

    function getXA(){
       return $this->XA;
    }

    function getSAVEPOINTS(){
       return $this->SAVEPOINTS;
    }

    function setENGINE($ENGINE){
        $this->ENGINE = $ENGINE;
    }

    function setSUPPORT($SUPPORT){
        $this->SUPPORT = $SUPPORT;
    }

    function setCOMMENT($COMMENT){
        $this->COMMENT = $COMMENT;
    }

    function setTRANSACTIONS($TRANSACTIONS){
        $this->TRANSACTIONS = $TRANSACTIONS;
    }

    function setXA($XA){
        $this->XA = $XA;
    }

    function setSAVEPOINTS($SAVEPOINTS){
        $this->SAVEPOINTS = $SAVEPOINTS;
    }

}