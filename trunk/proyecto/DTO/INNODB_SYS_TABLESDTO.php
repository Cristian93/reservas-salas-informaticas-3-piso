<?php

class INNODB_SYS_TABLESDTO{

    private $TABLE_ID;
    private $NAME;
    private $FLAG;
    private $N_COLS;
    private $SPACE;
    private $FILE_FORMAT;
    private $ROW_FORMAT;
    private $ZIP_PAGE_SIZE;

    function getTABLE_ID(){
       return $this->TABLE_ID;
    }

    function getNAME(){
       return $this->NAME;
    }

    function getFLAG(){
       return $this->FLAG;
    }

    function getN_COLS(){
       return $this->N_COLS;
    }

    function getSPACE(){
       return $this->SPACE;
    }

    function getFILE_FORMAT(){
       return $this->FILE_FORMAT;
    }

    function getROW_FORMAT(){
       return $this->ROW_FORMAT;
    }

    function getZIP_PAGE_SIZE(){
       return $this->ZIP_PAGE_SIZE;
    }

    function setTABLE_ID($TABLE_ID){
        $this->TABLE_ID = $TABLE_ID;
    }

    function setNAME($NAME){
        $this->NAME = $NAME;
    }

    function setFLAG($FLAG){
        $this->FLAG = $FLAG;
    }

    function setN_COLS($N_COLS){
        $this->N_COLS = $N_COLS;
    }

    function setSPACE($SPACE){
        $this->SPACE = $SPACE;
    }

    function setFILE_FORMAT($FILE_FORMAT){
        $this->FILE_FORMAT = $FILE_FORMAT;
    }

    function setROW_FORMAT($ROW_FORMAT){
        $this->ROW_FORMAT = $ROW_FORMAT;
    }

    function setZIP_PAGE_SIZE($ZIP_PAGE_SIZE){
        $this->ZIP_PAGE_SIZE = $ZIP_PAGE_SIZE;
    }

}