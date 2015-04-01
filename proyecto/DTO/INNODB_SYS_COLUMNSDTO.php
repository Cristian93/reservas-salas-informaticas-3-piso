<?php

class INNODB_SYS_COLUMNSDTO{

    private $TABLE_ID;
    private $NAME;
    private $POS;
    private $MTYPE;
    private $PRTYPE;
    private $LEN;

    function getTABLE_ID(){
       return $this->TABLE_ID;
    }

    function getNAME(){
       return $this->NAME;
    }

    function getPOS(){
       return $this->POS;
    }

    function getMTYPE(){
       return $this->MTYPE;
    }

    function getPRTYPE(){
       return $this->PRTYPE;
    }

    function getLEN(){
       return $this->LEN;
    }

    function setTABLE_ID($TABLE_ID){
        $this->TABLE_ID = $TABLE_ID;
    }

    function setNAME($NAME){
        $this->NAME = $NAME;
    }

    function setPOS($POS){
        $this->POS = $POS;
    }

    function setMTYPE($MTYPE){
        $this->MTYPE = $MTYPE;
    }

    function setPRTYPE($PRTYPE){
        $this->PRTYPE = $PRTYPE;
    }

    function setLEN($LEN){
        $this->LEN = $LEN;
    }

}