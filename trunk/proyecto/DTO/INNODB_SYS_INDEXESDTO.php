<?php

class INNODB_SYS_INDEXESDTO{

    private $INDEX_ID;
    private $NAME;
    private $TABLE_ID;
    private $TYPE;
    private $N_FIELDS;
    private $PAGE_NO;
    private $SPACE;

    function getINDEX_ID(){
       return $this->INDEX_ID;
    }

    function getNAME(){
       return $this->NAME;
    }

    function getTABLE_ID(){
       return $this->TABLE_ID;
    }

    function getTYPE(){
       return $this->TYPE;
    }

    function getN_FIELDS(){
       return $this->N_FIELDS;
    }

    function getPAGE_NO(){
       return $this->PAGE_NO;
    }

    function getSPACE(){
       return $this->SPACE;
    }

    function setINDEX_ID($INDEX_ID){
        $this->INDEX_ID = $INDEX_ID;
    }

    function setNAME($NAME){
        $this->NAME = $NAME;
    }

    function setTABLE_ID($TABLE_ID){
        $this->TABLE_ID = $TABLE_ID;
    }

    function setTYPE($TYPE){
        $this->TYPE = $TYPE;
    }

    function setN_FIELDS($N_FIELDS){
        $this->N_FIELDS = $N_FIELDS;
    }

    function setPAGE_NO($PAGE_NO){
        $this->PAGE_NO = $PAGE_NO;
    }

    function setSPACE($SPACE){
        $this->SPACE = $SPACE;
    }

}