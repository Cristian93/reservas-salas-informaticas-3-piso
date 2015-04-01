<?php

class COLUMNSDTO{

    private $TABLE_CATALOG;
    private $TABLE_SCHEMA;
    private $TABLE_NAME;
    private $COLUMN_NAME;
    private $ORDINAL_POSITION;
    private $COLUMN_DEFAULT;
    private $IS_NULLABLE;
    private $DATA_TYPE;
    private $CHARACTER_MAXIMUM_LENGTH;
    private $CHARACTER_OCTET_LENGTH;
    private $NUMERIC_PRECISION;
    private $NUMERIC_SCALE;
    private $DATETIME_PRECISION;
    private $CHARACTER_SET_NAME;
    private $COLLATION_NAME;
    private $COLUMN_TYPE;
    private $COLUMN_KEY;
    private $EXTRA;
    private $PRIVILEGES;
    private $COLUMN_COMMENT;

    function getTABLE_CATALOG(){
       return $this->TABLE_CATALOG;
    }

    function getTABLE_SCHEMA(){
       return $this->TABLE_SCHEMA;
    }

    function getTABLE_NAME(){
       return $this->TABLE_NAME;
    }

    function getCOLUMN_NAME(){
       return $this->COLUMN_NAME;
    }

    function getORDINAL_POSITION(){
       return $this->ORDINAL_POSITION;
    }

    function getCOLUMN_DEFAULT(){
       return $this->COLUMN_DEFAULT;
    }

    function getIS_NULLABLE(){
       return $this->IS_NULLABLE;
    }

    function getDATA_TYPE(){
       return $this->DATA_TYPE;
    }

    function getCHARACTER_MAXIMUM_LENGTH(){
       return $this->CHARACTER_MAXIMUM_LENGTH;
    }

    function getCHARACTER_OCTET_LENGTH(){
       return $this->CHARACTER_OCTET_LENGTH;
    }

    function getNUMERIC_PRECISION(){
       return $this->NUMERIC_PRECISION;
    }

    function getNUMERIC_SCALE(){
       return $this->NUMERIC_SCALE;
    }

    function getDATETIME_PRECISION(){
       return $this->DATETIME_PRECISION;
    }

    function getCHARACTER_SET_NAME(){
       return $this->CHARACTER_SET_NAME;
    }

    function getCOLLATION_NAME(){
       return $this->COLLATION_NAME;
    }

    function getCOLUMN_TYPE(){
       return $this->COLUMN_TYPE;
    }

    function getCOLUMN_KEY(){
       return $this->COLUMN_KEY;
    }

    function getEXTRA(){
       return $this->EXTRA;
    }

    function getPRIVILEGES(){
       return $this->PRIVILEGES;
    }

    function getCOLUMN_COMMENT(){
       return $this->COLUMN_COMMENT;
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

    function setCOLUMN_NAME($COLUMN_NAME){
        $this->COLUMN_NAME = $COLUMN_NAME;
    }

    function setORDINAL_POSITION($ORDINAL_POSITION){
        $this->ORDINAL_POSITION = $ORDINAL_POSITION;
    }

    function setCOLUMN_DEFAULT($COLUMN_DEFAULT){
        $this->COLUMN_DEFAULT = $COLUMN_DEFAULT;
    }

    function setIS_NULLABLE($IS_NULLABLE){
        $this->IS_NULLABLE = $IS_NULLABLE;
    }

    function setDATA_TYPE($DATA_TYPE){
        $this->DATA_TYPE = $DATA_TYPE;
    }

    function setCHARACTER_MAXIMUM_LENGTH($CHARACTER_MAXIMUM_LENGTH){
        $this->CHARACTER_MAXIMUM_LENGTH = $CHARACTER_MAXIMUM_LENGTH;
    }

    function setCHARACTER_OCTET_LENGTH($CHARACTER_OCTET_LENGTH){
        $this->CHARACTER_OCTET_LENGTH = $CHARACTER_OCTET_LENGTH;
    }

    function setNUMERIC_PRECISION($NUMERIC_PRECISION){
        $this->NUMERIC_PRECISION = $NUMERIC_PRECISION;
    }

    function setNUMERIC_SCALE($NUMERIC_SCALE){
        $this->NUMERIC_SCALE = $NUMERIC_SCALE;
    }

    function setDATETIME_PRECISION($DATETIME_PRECISION){
        $this->DATETIME_PRECISION = $DATETIME_PRECISION;
    }

    function setCHARACTER_SET_NAME($CHARACTER_SET_NAME){
        $this->CHARACTER_SET_NAME = $CHARACTER_SET_NAME;
    }

    function setCOLLATION_NAME($COLLATION_NAME){
        $this->COLLATION_NAME = $COLLATION_NAME;
    }

    function setCOLUMN_TYPE($COLUMN_TYPE){
        $this->COLUMN_TYPE = $COLUMN_TYPE;
    }

    function setCOLUMN_KEY($COLUMN_KEY){
        $this->COLUMN_KEY = $COLUMN_KEY;
    }

    function setEXTRA($EXTRA){
        $this->EXTRA = $EXTRA;
    }

    function setPRIVILEGES($PRIVILEGES){
        $this->PRIVILEGES = $PRIVILEGES;
    }

    function setCOLUMN_COMMENT($COLUMN_COMMENT){
        $this->COLUMN_COMMENT = $COLUMN_COMMENT;
    }

}