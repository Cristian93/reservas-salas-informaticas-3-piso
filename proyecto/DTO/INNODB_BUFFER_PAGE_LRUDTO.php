<?php

class INNODB_BUFFER_PAGE_LRUDTO{

    private $POOL_ID;
    private $LRU_POSITION;
    private $SPACE;
    private $PAGE_NUMBER;
    private $PAGE_TYPE;
    private $FLUSH_TYPE;
    private $FIX_COUNT;
    private $IS_HASHED;
    private $NEWEST_MODIFICATION;
    private $OLDEST_MODIFICATION;
    private $ACCESS_TIME;
    private $TABLE_NAME;
    private $INDEX_NAME;
    private $NUMBER_RECORDS;
    private $DATA_SIZE;
    private $COMPRESSED_SIZE;
    private $COMPRESSED;
    private $IO_FIX;
    private $IS_OLD;
    private $FREE_PAGE_CLOCK;

    function getPOOL_ID(){
       return $this->POOL_ID;
    }

    function getLRU_POSITION(){
       return $this->LRU_POSITION;
    }

    function getSPACE(){
       return $this->SPACE;
    }

    function getPAGE_NUMBER(){
       return $this->PAGE_NUMBER;
    }

    function getPAGE_TYPE(){
       return $this->PAGE_TYPE;
    }

    function getFLUSH_TYPE(){
       return $this->FLUSH_TYPE;
    }

    function getFIX_COUNT(){
       return $this->FIX_COUNT;
    }

    function getIS_HASHED(){
       return $this->IS_HASHED;
    }

    function getNEWEST_MODIFICATION(){
       return $this->NEWEST_MODIFICATION;
    }

    function getOLDEST_MODIFICATION(){
       return $this->OLDEST_MODIFICATION;
    }

    function getACCESS_TIME(){
       return $this->ACCESS_TIME;
    }

    function getTABLE_NAME(){
       return $this->TABLE_NAME;
    }

    function getINDEX_NAME(){
       return $this->INDEX_NAME;
    }

    function getNUMBER_RECORDS(){
       return $this->NUMBER_RECORDS;
    }

    function getDATA_SIZE(){
       return $this->DATA_SIZE;
    }

    function getCOMPRESSED_SIZE(){
       return $this->COMPRESSED_SIZE;
    }

    function getCOMPRESSED(){
       return $this->COMPRESSED;
    }

    function getIO_FIX(){
       return $this->IO_FIX;
    }

    function getIS_OLD(){
       return $this->IS_OLD;
    }

    function getFREE_PAGE_CLOCK(){
       return $this->FREE_PAGE_CLOCK;
    }

    function setPOOL_ID($POOL_ID){
        $this->POOL_ID = $POOL_ID;
    }

    function setLRU_POSITION($LRU_POSITION){
        $this->LRU_POSITION = $LRU_POSITION;
    }

    function setSPACE($SPACE){
        $this->SPACE = $SPACE;
    }

    function setPAGE_NUMBER($PAGE_NUMBER){
        $this->PAGE_NUMBER = $PAGE_NUMBER;
    }

    function setPAGE_TYPE($PAGE_TYPE){
        $this->PAGE_TYPE = $PAGE_TYPE;
    }

    function setFLUSH_TYPE($FLUSH_TYPE){
        $this->FLUSH_TYPE = $FLUSH_TYPE;
    }

    function setFIX_COUNT($FIX_COUNT){
        $this->FIX_COUNT = $FIX_COUNT;
    }

    function setIS_HASHED($IS_HASHED){
        $this->IS_HASHED = $IS_HASHED;
    }

    function setNEWEST_MODIFICATION($NEWEST_MODIFICATION){
        $this->NEWEST_MODIFICATION = $NEWEST_MODIFICATION;
    }

    function setOLDEST_MODIFICATION($OLDEST_MODIFICATION){
        $this->OLDEST_MODIFICATION = $OLDEST_MODIFICATION;
    }

    function setACCESS_TIME($ACCESS_TIME){
        $this->ACCESS_TIME = $ACCESS_TIME;
    }

    function setTABLE_NAME($TABLE_NAME){
        $this->TABLE_NAME = $TABLE_NAME;
    }

    function setINDEX_NAME($INDEX_NAME){
        $this->INDEX_NAME = $INDEX_NAME;
    }

    function setNUMBER_RECORDS($NUMBER_RECORDS){
        $this->NUMBER_RECORDS = $NUMBER_RECORDS;
    }

    function setDATA_SIZE($DATA_SIZE){
        $this->DATA_SIZE = $DATA_SIZE;
    }

    function setCOMPRESSED_SIZE($COMPRESSED_SIZE){
        $this->COMPRESSED_SIZE = $COMPRESSED_SIZE;
    }

    function setCOMPRESSED($COMPRESSED){
        $this->COMPRESSED = $COMPRESSED;
    }

    function setIO_FIX($IO_FIX){
        $this->IO_FIX = $IO_FIX;
    }

    function setIS_OLD($IS_OLD){
        $this->IS_OLD = $IS_OLD;
    }

    function setFREE_PAGE_CLOCK($FREE_PAGE_CLOCK){
        $this->FREE_PAGE_CLOCK = $FREE_PAGE_CLOCK;
    }

}