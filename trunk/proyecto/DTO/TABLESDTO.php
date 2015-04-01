<?php

class TABLESDTO{

    private $TABLE_CATALOG;
    private $TABLE_SCHEMA;
    private $TABLE_NAME;
    private $TABLE_TYPE;
    private $ENGINE;
    private $VERSION;
    private $ROW_FORMAT;
    private $TABLE_ROWS;
    private $AVG_ROW_LENGTH;
    private $DATA_LENGTH;
    private $MAX_DATA_LENGTH;
    private $INDEX_LENGTH;
    private $DATA_FREE;
    private $AUTO_INCREMENT;
    private $CREATE_TIME;
    private $UPDATE_TIME;
    private $CHECK_TIME;
    private $TABLE_COLLATION;
    private $CHECKSUM;
    private $CREATE_OPTIONS;
    private $TABLE_COMMENT;

    function getTABLE_CATALOG(){
       return $this->TABLE_CATALOG;
    }

    function getTABLE_SCHEMA(){
       return $this->TABLE_SCHEMA;
    }

    function getTABLE_NAME(){
       return $this->TABLE_NAME;
    }

    function getTABLE_TYPE(){
       return $this->TABLE_TYPE;
    }

    function getENGINE(){
       return $this->ENGINE;
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

    function getAUTO_INCREMENT(){
       return $this->AUTO_INCREMENT;
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

    function getTABLE_COLLATION(){
       return $this->TABLE_COLLATION;
    }

    function getCHECKSUM(){
       return $this->CHECKSUM;
    }

    function getCREATE_OPTIONS(){
       return $this->CREATE_OPTIONS;
    }

    function getTABLE_COMMENT(){
       return $this->TABLE_COMMENT;
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

    function setTABLE_TYPE($TABLE_TYPE){
        $this->TABLE_TYPE = $TABLE_TYPE;
    }

    function setENGINE($ENGINE){
        $this->ENGINE = $ENGINE;
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

    function setAUTO_INCREMENT($AUTO_INCREMENT){
        $this->AUTO_INCREMENT = $AUTO_INCREMENT;
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

    function setTABLE_COLLATION($TABLE_COLLATION){
        $this->TABLE_COLLATION = $TABLE_COLLATION;
    }

    function setCHECKSUM($CHECKSUM){
        $this->CHECKSUM = $CHECKSUM;
    }

    function setCREATE_OPTIONS($CREATE_OPTIONS){
        $this->CREATE_OPTIONS = $CREATE_OPTIONS;
    }

    function setTABLE_COMMENT($TABLE_COMMENT){
        $this->TABLE_COMMENT = $TABLE_COMMENT;
    }

}