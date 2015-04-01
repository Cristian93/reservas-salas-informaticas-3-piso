<?php

class PARTITIONSDTO{

    private $TABLE_CATALOG;
    private $TABLE_SCHEMA;
    private $TABLE_NAME;
    private $PARTITION_NAME;
    private $SUBPARTITION_NAME;
    private $PARTITION_ORDINAL_POSITION;
    private $SUBPARTITION_ORDINAL_POSITION;
    private $PARTITION_METHOD;
    private $SUBPARTITION_METHOD;
    private $PARTITION_EXPRESSION;
    private $SUBPARTITION_EXPRESSION;
    private $PARTITION_DESCRIPTION;
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
    private $PARTITION_COMMENT;
    private $NODEGROUP;
    private $TABLESPACE_NAME;

    function getTABLE_CATALOG(){
       return $this->TABLE_CATALOG;
    }

    function getTABLE_SCHEMA(){
       return $this->TABLE_SCHEMA;
    }

    function getTABLE_NAME(){
       return $this->TABLE_NAME;
    }

    function getPARTITION_NAME(){
       return $this->PARTITION_NAME;
    }

    function getSUBPARTITION_NAME(){
       return $this->SUBPARTITION_NAME;
    }

    function getPARTITION_ORDINAL_POSITION(){
       return $this->PARTITION_ORDINAL_POSITION;
    }

    function getSUBPARTITION_ORDINAL_POSITION(){
       return $this->SUBPARTITION_ORDINAL_POSITION;
    }

    function getPARTITION_METHOD(){
       return $this->PARTITION_METHOD;
    }

    function getSUBPARTITION_METHOD(){
       return $this->SUBPARTITION_METHOD;
    }

    function getPARTITION_EXPRESSION(){
       return $this->PARTITION_EXPRESSION;
    }

    function getSUBPARTITION_EXPRESSION(){
       return $this->SUBPARTITION_EXPRESSION;
    }

    function getPARTITION_DESCRIPTION(){
       return $this->PARTITION_DESCRIPTION;
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

    function getPARTITION_COMMENT(){
       return $this->PARTITION_COMMENT;
    }

    function getNODEGROUP(){
       return $this->NODEGROUP;
    }

    function getTABLESPACE_NAME(){
       return $this->TABLESPACE_NAME;
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

    function setPARTITION_NAME($PARTITION_NAME){
        $this->PARTITION_NAME = $PARTITION_NAME;
    }

    function setSUBPARTITION_NAME($SUBPARTITION_NAME){
        $this->SUBPARTITION_NAME = $SUBPARTITION_NAME;
    }

    function setPARTITION_ORDINAL_POSITION($PARTITION_ORDINAL_POSITION){
        $this->PARTITION_ORDINAL_POSITION = $PARTITION_ORDINAL_POSITION;
    }

    function setSUBPARTITION_ORDINAL_POSITION($SUBPARTITION_ORDINAL_POSITION){
        $this->SUBPARTITION_ORDINAL_POSITION = $SUBPARTITION_ORDINAL_POSITION;
    }

    function setPARTITION_METHOD($PARTITION_METHOD){
        $this->PARTITION_METHOD = $PARTITION_METHOD;
    }

    function setSUBPARTITION_METHOD($SUBPARTITION_METHOD){
        $this->SUBPARTITION_METHOD = $SUBPARTITION_METHOD;
    }

    function setPARTITION_EXPRESSION($PARTITION_EXPRESSION){
        $this->PARTITION_EXPRESSION = $PARTITION_EXPRESSION;
    }

    function setSUBPARTITION_EXPRESSION($SUBPARTITION_EXPRESSION){
        $this->SUBPARTITION_EXPRESSION = $SUBPARTITION_EXPRESSION;
    }

    function setPARTITION_DESCRIPTION($PARTITION_DESCRIPTION){
        $this->PARTITION_DESCRIPTION = $PARTITION_DESCRIPTION;
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

    function setPARTITION_COMMENT($PARTITION_COMMENT){
        $this->PARTITION_COMMENT = $PARTITION_COMMENT;
    }

    function setNODEGROUP($NODEGROUP){
        $this->NODEGROUP = $NODEGROUP;
    }

    function setTABLESPACE_NAME($TABLESPACE_NAME){
        $this->TABLESPACE_NAME = $TABLESPACE_NAME;
    }

}