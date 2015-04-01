<?php

class ROUTINESDTO{

    private $SPECIFIC_NAME;
    private $ROUTINE_CATALOG;
    private $ROUTINE_SCHEMA;
    private $ROUTINE_NAME;
    private $ROUTINE_TYPE;
    private $DATA_TYPE;
    private $CHARACTER_MAXIMUM_LENGTH;
    private $CHARACTER_OCTET_LENGTH;
    private $NUMERIC_PRECISION;
    private $NUMERIC_SCALE;
    private $DATETIME_PRECISION;
    private $CHARACTER_SET_NAME;
    private $COLLATION_NAME;
    private $DTD_IDENTIFIER;
    private $ROUTINE_BODY;
    private $ROUTINE_DEFINITION;
    private $EXTERNAL_NAME;
    private $EXTERNAL_LANGUAGE;
    private $PARAMETER_STYLE;
    private $IS_DETERMINISTIC;
    private $SQL_DATA_ACCESS;
    private $SQL_PATH;
    private $SECURITY_TYPE;
    private $CREATED;
    private $LAST_ALTERED;
    private $SQL_MODE;
    private $ROUTINE_COMMENT;
    private $DEFINER;
    private $CHARACTER_SET_CLIENT;
    private $COLLATION_CONNECTION;
    private $DATABASE_COLLATION;

    function getSPECIFIC_NAME(){
       return $this->SPECIFIC_NAME;
    }

    function getROUTINE_CATALOG(){
       return $this->ROUTINE_CATALOG;
    }

    function getROUTINE_SCHEMA(){
       return $this->ROUTINE_SCHEMA;
    }

    function getROUTINE_NAME(){
       return $this->ROUTINE_NAME;
    }

    function getROUTINE_TYPE(){
       return $this->ROUTINE_TYPE;
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

    function getDTD_IDENTIFIER(){
       return $this->DTD_IDENTIFIER;
    }

    function getROUTINE_BODY(){
       return $this->ROUTINE_BODY;
    }

    function getROUTINE_DEFINITION(){
       return $this->ROUTINE_DEFINITION;
    }

    function getEXTERNAL_NAME(){
       return $this->EXTERNAL_NAME;
    }

    function getEXTERNAL_LANGUAGE(){
       return $this->EXTERNAL_LANGUAGE;
    }

    function getPARAMETER_STYLE(){
       return $this->PARAMETER_STYLE;
    }

    function getIS_DETERMINISTIC(){
       return $this->IS_DETERMINISTIC;
    }

    function getSQL_DATA_ACCESS(){
       return $this->SQL_DATA_ACCESS;
    }

    function getSQL_PATH(){
       return $this->SQL_PATH;
    }

    function getSECURITY_TYPE(){
       return $this->SECURITY_TYPE;
    }

    function getCREATED(){
       return $this->CREATED;
    }

    function getLAST_ALTERED(){
       return $this->LAST_ALTERED;
    }

    function getSQL_MODE(){
       return $this->SQL_MODE;
    }

    function getROUTINE_COMMENT(){
       return $this->ROUTINE_COMMENT;
    }

    function getDEFINER(){
       return $this->DEFINER;
    }

    function getCHARACTER_SET_CLIENT(){
       return $this->CHARACTER_SET_CLIENT;
    }

    function getCOLLATION_CONNECTION(){
       return $this->COLLATION_CONNECTION;
    }

    function getDATABASE_COLLATION(){
       return $this->DATABASE_COLLATION;
    }

    function setSPECIFIC_NAME($SPECIFIC_NAME){
        $this->SPECIFIC_NAME = $SPECIFIC_NAME;
    }

    function setROUTINE_CATALOG($ROUTINE_CATALOG){
        $this->ROUTINE_CATALOG = $ROUTINE_CATALOG;
    }

    function setROUTINE_SCHEMA($ROUTINE_SCHEMA){
        $this->ROUTINE_SCHEMA = $ROUTINE_SCHEMA;
    }

    function setROUTINE_NAME($ROUTINE_NAME){
        $this->ROUTINE_NAME = $ROUTINE_NAME;
    }

    function setROUTINE_TYPE($ROUTINE_TYPE){
        $this->ROUTINE_TYPE = $ROUTINE_TYPE;
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

    function setDTD_IDENTIFIER($DTD_IDENTIFIER){
        $this->DTD_IDENTIFIER = $DTD_IDENTIFIER;
    }

    function setROUTINE_BODY($ROUTINE_BODY){
        $this->ROUTINE_BODY = $ROUTINE_BODY;
    }

    function setROUTINE_DEFINITION($ROUTINE_DEFINITION){
        $this->ROUTINE_DEFINITION = $ROUTINE_DEFINITION;
    }

    function setEXTERNAL_NAME($EXTERNAL_NAME){
        $this->EXTERNAL_NAME = $EXTERNAL_NAME;
    }

    function setEXTERNAL_LANGUAGE($EXTERNAL_LANGUAGE){
        $this->EXTERNAL_LANGUAGE = $EXTERNAL_LANGUAGE;
    }

    function setPARAMETER_STYLE($PARAMETER_STYLE){
        $this->PARAMETER_STYLE = $PARAMETER_STYLE;
    }

    function setIS_DETERMINISTIC($IS_DETERMINISTIC){
        $this->IS_DETERMINISTIC = $IS_DETERMINISTIC;
    }

    function setSQL_DATA_ACCESS($SQL_DATA_ACCESS){
        $this->SQL_DATA_ACCESS = $SQL_DATA_ACCESS;
    }

    function setSQL_PATH($SQL_PATH){
        $this->SQL_PATH = $SQL_PATH;
    }

    function setSECURITY_TYPE($SECURITY_TYPE){
        $this->SECURITY_TYPE = $SECURITY_TYPE;
    }

    function setCREATED($CREATED){
        $this->CREATED = $CREATED;
    }

    function setLAST_ALTERED($LAST_ALTERED){
        $this->LAST_ALTERED = $LAST_ALTERED;
    }

    function setSQL_MODE($SQL_MODE){
        $this->SQL_MODE = $SQL_MODE;
    }

    function setROUTINE_COMMENT($ROUTINE_COMMENT){
        $this->ROUTINE_COMMENT = $ROUTINE_COMMENT;
    }

    function setDEFINER($DEFINER){
        $this->DEFINER = $DEFINER;
    }

    function setCHARACTER_SET_CLIENT($CHARACTER_SET_CLIENT){
        $this->CHARACTER_SET_CLIENT = $CHARACTER_SET_CLIENT;
    }

    function setCOLLATION_CONNECTION($COLLATION_CONNECTION){
        $this->COLLATION_CONNECTION = $COLLATION_CONNECTION;
    }

    function setDATABASE_COLLATION($DATABASE_COLLATION){
        $this->DATABASE_COLLATION = $DATABASE_COLLATION;
    }

}