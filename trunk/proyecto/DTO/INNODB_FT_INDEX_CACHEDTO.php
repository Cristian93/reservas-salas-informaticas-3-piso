<?php

class INNODB_FT_INDEX_CACHEDTO{

    private $WORD;
    private $FIRST_DOC_ID;
    private $LAST_DOC_ID;
    private $DOC_COUNT;
    private $DOC_ID;
    private $POSITION;

    function getWORD(){
       return $this->WORD;
    }

    function getFIRST_DOC_ID(){
       return $this->FIRST_DOC_ID;
    }

    function getLAST_DOC_ID(){
       return $this->LAST_DOC_ID;
    }

    function getDOC_COUNT(){
       return $this->DOC_COUNT;
    }

    function getDOC_ID(){
       return $this->DOC_ID;
    }

    function getPOSITION(){
       return $this->POSITION;
    }

    function setWORD($WORD){
        $this->WORD = $WORD;
    }

    function setFIRST_DOC_ID($FIRST_DOC_ID){
        $this->FIRST_DOC_ID = $FIRST_DOC_ID;
    }

    function setLAST_DOC_ID($LAST_DOC_ID){
        $this->LAST_DOC_ID = $LAST_DOC_ID;
    }

    function setDOC_COUNT($DOC_COUNT){
        $this->DOC_COUNT = $DOC_COUNT;
    }

    function setDOC_ID($DOC_ID){
        $this->DOC_ID = $DOC_ID;
    }

    function setPOSITION($POSITION){
        $this->POSITION = $POSITION;
    }

}