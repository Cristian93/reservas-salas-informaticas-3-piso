<?php

class INNODB_SYS_TABLESPACESDTO{

    private $SPACE;
    private $NAME;
    private $FLAG;
    private $FILE_FORMAT;
    private $ROW_FORMAT;
    private $PAGE_SIZE;
    private $ZIP_PAGE_SIZE;

    function getSPACE(){
       return $this->SPACE;
    }

    function getNAME(){
       return $this->NAME;
    }

    function getFLAG(){
       return $this->FLAG;
    }

    function getFILE_FORMAT(){
       return $this->FILE_FORMAT;
    }

    function getROW_FORMAT(){
       return $this->ROW_FORMAT;
    }

    function getPAGE_SIZE(){
       return $this->PAGE_SIZE;
    }

    function getZIP_PAGE_SIZE(){
       return $this->ZIP_PAGE_SIZE;
    }

    function setSPACE($SPACE){
        $this->SPACE = $SPACE;
    }

    function setNAME($NAME){
        $this->NAME = $NAME;
    }

    function setFLAG($FLAG){
        $this->FLAG = $FLAG;
    }

    function setFILE_FORMAT($FILE_FORMAT){
        $this->FILE_FORMAT = $FILE_FORMAT;
    }

    function setROW_FORMAT($ROW_FORMAT){
        $this->ROW_FORMAT = $ROW_FORMAT;
    }

    function setPAGE_SIZE($PAGE_SIZE){
        $this->PAGE_SIZE = $PAGE_SIZE;
    }

    function setZIP_PAGE_SIZE($ZIP_PAGE_SIZE){
        $this->ZIP_PAGE_SIZE = $ZIP_PAGE_SIZE;
    }

}