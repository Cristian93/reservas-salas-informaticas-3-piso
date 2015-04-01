<?php

class FILESDTO{

    private $FILE_ID;
    private $FILE_NAME;
    private $FILE_TYPE;
    private $TABLESPACE_NAME;
    private $TABLE_CATALOG;
    private $TABLE_SCHEMA;
    private $TABLE_NAME;
    private $LOGFILE_GROUP_NAME;
    private $LOGFILE_GROUP_NUMBER;
    private $ENGINE;
    private $FULLTEXT_KEYS;
    private $DELETED_ROWS;
    private $UPDATE_COUNT;
    private $FREE_EXTENTS;
    private $TOTAL_EXTENTS;
    private $EXTENT_SIZE;
    private $INITIAL_SIZE;
    private $MAXIMUM_SIZE;
    private $AUTOEXTEND_SIZE;
    private $CREATION_TIME;
    private $LAST_UPDATE_TIME;
    private $LAST_ACCESS_TIME;
    private $RECOVER_TIME;
    private $TRANSACTION_COUNTER;
    private $VERSION;
    private $ROW_FORMAT;
    private $TABLE_ROWS;
    private $AVG_ROW_LENGTH;
    private $DATA_LENGTH;
    private $MAX_DATA_LENGTH;
    private $INDEX_LENGTH;
    private $DATA_FREE;
    private $CREATE_TIME;
    private $UPDATE_TIME;
    private $CHECK_TIME;
    private $CHECKSUM;
    private $STATUS;
    private $EXTRA;

    function getFILE_ID(){
       return $this->FILE_ID;
    }

    function getFILE_NAME(){
       return $this->FILE_NAME;
    }

    function getFILE_TYPE(){
       return $this->FILE_TYPE;
    }

    function getTABLESPACE_NAME(){
       return $this->TABLESPACE_NAME;
    }

    function getTABLE_CATALOG(){
       return $this->TABLE_CATALOG;
    }

    function getTABLE_SCHEMA(){
       return $this->TABLE_SCHEMA;
    }

    function getTABLE_NAME(){
       return $this->TABLE_NAME;
    }

    function getLOGFILE_GROUP_NAME(){
       return $this->LOGFILE_GROUP_NAME;
    }

    function getLOGFILE_GROUP_NUMBER(){
       return $this->LOGFILE_GROUP_NUMBER;
    }

    function getENGINE(){
       return $this->ENGINE;
    }

    function getFULLTEXT_KEYS(){
       return $this->FULLTEXT_KEYS;
    }

    function getDELETED_ROWS(){
       return $this->DELETED_ROWS;
    }

    function getUPDATE_COUNT(){
       return $this->UPDATE_COUNT;
    }

    function getFREE_EXTENTS(){
       return $this->FREE_EXTENTS;
    }

    function getTOTAL_EXTENTS(){
       return $this->TOTAL_EXTENTS;
    }

    function getEXTENT_SIZE(){
       return $this->EXTENT_SIZE;
    }

    function getINITIAL_SIZE(){
       return $this->INITIAL_SIZE;
    }

    function getMAXIMUM_SIZE(){
       return $this->MAXIMUM_SIZE;
    }

    function getAUTOEXTEND_SIZE(){
       return $this->AUTOEXTEND_SIZE;
    }

    function getCREATION_TIME(){
       return $this->CREATION_TIME;
    }

    function getLAST_UPDATE_TIME(){
       return $this->LAST_UPDATE_TIME;
    }

    function getLAST_ACCESS_TIME(){
       return $this->LAST_ACCESS_TIME;
    }

    function getRECOVER_TIME(){
       return $this->RECOVER_TIME;
    }

    function getTRANSACTION_COUNTER(){
       return $this->TRANSACTION_COUNTER;
    }

    function getVERSION(){
       return $this->VERSION;
    }

    function getROW_FORMAT(){
       return $this->ROW_FORMAT;
    }

    function getTABLE_ROWS(){
       return $this->TABLE_ROWS;
    }

    function getAVG_ROW_LENGTH(){
       return $this->AVG_ROW_LENGTH;
    }

    function getDATA_LENGTH(){
       return $this->DATA_LENGTH;
    }

    function getMAX_DATA_LENGTH(){
       return $this->MAX_DATA_LENGTH;
    }

    function getINDEX_LENGTH(){
       return $this->INDEX_LENGTH;
    }

    function getDATA_FREE(){
       return $this->DATA_FREE;
    }

    function getCREATE_TIME(){
       return $this->CREATE_TIME;
    }

    function getUPDATE_TIME(){
       return $this->UPDATE_TIME;
    }

    function getCHECK_TIME(){
       return $this->CHECK_TIME;
    }

    function getCHECKSUM(){
       return $this->CHECKSUM;
    }

    function getSTATUS(){
       return $this->STATUS;
    }

    function getEXTRA(){
       return $this->EXTRA;
    }

    function setFILE_ID($FILE_ID){
        $this->FILE_ID = $FILE_ID;
    }

    function setFILE_NAME($FILE_NAME){
        $this->FILE_NAME = $FILE_NAME;
    }

    function setFILE_TYPE($FILE_TYPE){
        $this->FILE_TYPE = $FILE_TYPE;
    }

    function setTABLESPACE_NAME($TABLESPACE_NAME){
        $this->TABLESPACE_NAME = $TABLESPACE_NAME;
    }

    function setTABLE_CATALOG($TABLE_CATALOG){
        $this->TABLE_CATALOG = $TABLE_CATALOG;
    }

    function setTABLE_SCHEMA($TABLE_SCHEMA){
        $this->TABLE_SCHEMA = $TABLE_SCHEMA;
    }

    function setTABLE_NAME($TABLE_NAME){
        $this->TABLE_NAME = $TABLE_NAME;
    }

    function setLOGFILE_GROUP_NAME($LOGFILE_GROUP_NAME){
        $this->LOGFILE_GROUP_NAME = $LOGFILE_GROUP_NAME;
    }

    function setLOGFILE_GROUP_NUMBER($LOGFILE_GROUP_NUMBER){
        $this->LOGFILE_GROUP_NUMBER = $LOGFILE_GROUP_NUMBER;
    }

    function setENGINE($ENGINE){
        $this->ENGINE = $ENGINE;
    }

    function setFULLTEXT_KEYS($FULLTEXT_KEYS){
        $this->FULLTEXT_KEYS = $FULLTEXT_KEYS;
    }

    function setDELETED_ROWS($DELETED_ROWS){
        $this->DELETED_ROWS = $DELETED_ROWS;
    }

    function setUPDATE_COUNT($UPDATE_COUNT){
        $this->UPDATE_COUNT = $UPDATE_COUNT;
    }

    function setFREE_EXTENTS($FREE_EXTENTS){
        $this->FREE_EXTENTS = $FREE_EXTENTS;
    }

    function setTOTAL_EXTENTS($TOTAL_EXTENTS){
        $this->TOTAL_EXTENTS = $TOTAL_EXTENTS;
    }

    function setEXTENT_SIZE($EXTENT_SIZE){
        $this->EXTENT_SIZE = $EXTENT_SIZE;
    }

    function setINITIAL_SIZE($INITIAL_SIZE){
        $this->INITIAL_SIZE = $INITIAL_SIZE;
    }

    function setMAXIMUM_SIZE($MAXIMUM_SIZE){
        $this->MAXIMUM_SIZE = $MAXIMUM_SIZE;
    }

    function setAUTOEXTEND_SIZE($AUTOEXTEND_SIZE){
        $this->AUTOEXTEND_SIZE = $AUTOEXTEND_SIZE;
    }

    function setCREATION_TIME($CREATION_TIME){
        $this->CREATION_TIME = $CREATION_TIME;
    }

    function setLAST_UPDATE_TIME($LAST_UPDATE_TIME){
        $this->LAST_UPDATE_TIME = $LAST_UPDATE_TIME;
    }

    function setLAST_ACCESS_TIME($LAST_ACCESS_TIME){
        $this->LAST_ACCESS_TIME = $LAST_ACCESS_TIME;
    }

    function setRECOVER_TIME($RECOVER_TIME){
        $this->RECOVER_TIME = $RECOVER_TIME;
    }

    function setTRANSACTION_COUNTER($TRANSACTION_COUNTER){
        $this->TRANSACTION_COUNTER = $TRANSACTION_COUNTER;
    }

    function setVERSION($VERSION){
        $this->VERSION = $VERSION;
    }

    function setROW_FORMAT($ROW_FORMAT){
        $this->ROW_FORMAT = $ROW_FORMAT;
    }

    function setTABLE_ROWS($TABLE_ROWS){
        $this->TABLE_ROWS = $TABLE_ROWS;
    }

    function setAVG_ROW_LENGTH($AVG_ROW_LENGTH){
        $this->AVG_ROW_LENGTH = $AVG_ROW_LENGTH;
    }

    function setDATA_LENGTH($DATA_LENGTH){
        $this->DATA_LENGTH = $DATA_LENGTH;
    }

    function setMAX_DATA_LENGTH($MAX_DATA_LENGTH){
        $this->MAX_DATA_LENGTH = $MAX_DATA_LENGTH;
    }

    function setINDEX_LENGTH($INDEX_LENGTH){
        $this->INDEX_LENGTH = $INDEX_LENGTH;
    }

    function setDATA_FREE($DATA_FREE){
        $this->DATA_FREE = $DATA_FREE;
    }

    function setCREATE_TIME($CREATE_TIME){
        $this->CREATE_TIME = $CREATE_TIME;
    }

    function setUPDATE_TIME($UPDATE_TIME){
        $this->UPDATE_TIME = $UPDATE_TIME;
    }

    function setCHECK_TIME($CHECK_TIME){
        $this->CHECK_TIME = $CHECK_TIME;
    }

    function setCHECKSUM($CHECKSUM){
        $this->CHECKSUM = $CHECKSUM;
    }

    function setSTATUS($STATUS){
        $this->STATUS = $STATUS;
    }

    function setEXTRA($EXTRA){
        $this->EXTRA = $EXTRA;
    }

}