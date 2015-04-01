<?php

class INNODB_SYS_FIELDSDTO{

    private $INDEX_ID;
    private $NAME;
    private $POS;

    function getINDEX_ID(){
       return $this->INDEX_ID;
    }

    function getNAME(){
       return $this->NAME;
    }

    function getPOS(){
       return $this->POS;
    }

    function setINDEX_ID($INDEX_ID){
        $this->INDEX_ID = $INDEX_ID;
    }

    function setNAME($NAME){
        $this->NAME = $NAME;
    }

    function setPOS($POS){
        $this->POS = $POS;
    }

}