<?php

class STATISTICSDTO{

    private $TABLE_CATALOG;
    private $TABLE_SCHEMA;
    private $TABLE_NAME;
    private $NON_UNIQUE;
    private $INDEX_SCHEMA;
    private $INDEX_NAME;
    private $SEQ_IN_INDEX;
    private $COLUMN_NAME;
    private $COLLATION;
    private $CARDINALITY;
    private $SUB_PART;
    private $PACKED;
    private $NULLABLE;
    private $INDEX_TYPE;
    private $COMMENT;
    private $INDEX_COMMENT;

    function getTABLE_CATALOG(){
       return $this->TABLE_CATALOG;
    }

    function getTABLE_SCHEMA(){
       return $this->TABLE_SCHEMA;
    }

    function getTABLE_NAME(){
       return $this->TABLE_NAME;
    }

    function getNON_UNIQUE(){
       return $this->NON_UNIQUE;
    }

    function getINDEX_SCHEMA(){
       return $this->INDEX_SCHEMA;
    }

    function getINDEX_NAME(){
       return $this->INDEX_NAME;
    }

    function getSEQ_IN_INDEX(){
       return $this->SEQ_IN_INDEX;
    }

    function getCOLUMN_NAME(){
       return $this->COLUMN_NAME;
    }

    function getCOLLATION(){
       return $this->COLLATION;
    }

    function getCARDINALITY(){
       return $this->CARDINALITY;
    }

    function getSUB_PART(){
       return $this->SUB_PART;
    }

    function getPACKED(){
       return $this->PACKED;
    }

    function getNULLABLE(){
       return $this->NULLABLE;
    }

    function getINDEX_TYPE(){
       return $this->INDEX_TYPE;
    }

    function getCOMMENT(){
       return $this->COMMENT;
    }

    function getINDEX_COMMENT(){
       return $this->INDEX_COMMENT;
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

    function setNON_UNIQUE($NON_UNIQUE){
        $this->NON_UNIQUE = $NON_UNIQUE;
    }

    function setINDEX_SCHEMA($INDEX_SCHEMA){
        $this->INDEX_SCHEMA = $INDEX_SCHEMA;
    }

    function setINDEX_NAME($INDEX_NAME){
        $this->INDEX_NAME = $INDEX_NAME;
    }

    function setSEQ_IN_INDEX($SEQ_IN_INDEX){
        $this->SEQ_IN_INDEX = $SEQ_IN_INDEX;
    }

    function setCOLUMN_NAME($COLUMN_NAME){
        $this->COLUMN_NAME = $COLUMN_NAME;
    }

    function setCOLLATION($COLLATION){
        $this->COLLATION = $COLLATION;
    }

    function setCARDINALITY($CARDINALITY){
        $this->CARDINALITY = $CARDINALITY;
    }

    function setSUB_PART($SUB_PART){
        $this->SUB_PART = $SUB_PART;
    }

    function setPACKED($PACKED){
        $this->PACKED = $PACKED;
    }

    function setNULLABLE($NULLABLE){
        $this->NULLABLE = $NULLABLE;
    }

    function setINDEX_TYPE($INDEX_TYPE){
        $this->INDEX_TYPE = $INDEX_TYPE;
    }

    function setCOMMENT($COMMENT){
        $this->COMMENT = $COMMENT;
    }

    function setINDEX_COMMENT($INDEX_COMMENT){
        $this->INDEX_COMMENT = $INDEX_COMMENT;
    }

}