<?php

class PARAMETERSDTO{

    private $SPECIFIC_CATALOG;
    private $SPECIFIC_SCHEMA;
    private $SPECIFIC_NAME;
    private $ORDINAL_POSITION;
    private $PARAMETER_MODE;
    private $PARAMETER_NAME;
    private $DATA_TYPE;
    private $CHARACTER_MAXIMUM_LENGTH;
    private $CHARACTER_OCTET_LENGTH;
    private $NUMERIC_PRECISION;
    private $NUMERIC_SCALE;
    private $DATETIME_PRECISION;
    private $CHARACTER_SET_NAME;
    private $COLLATION_NAME;
    private $DTD_IDENTIFIER;
    private $ROUTINE_TYPE;

    function getSPECIFIC_CATALOG(){
       return $this->SPECIFIC_CATALOG;
    }

    function getSPECIFIC_SCHEMA(){
       return $this->SPECIFIC_SCHEMA;
    }

    function getSPECIFIC_NAME(){
       return $this->SPECIFIC_NAME;
    }

    function getORDINAL_POSITION(){
       return $this->ORDINAL_POSITION;
    }

    function getPARAMETER_MODE(){
       return $this->PARAMETER_MODE;
    }

    function getPARAMETER_NAME(){
       return $this->PARAMETER_NAME;
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

    function getROUTINE_TYPE(){
       return $this->ROUTINE_TYPE;
    }

    function setSPECIFIC_CATALOG($SPECIFIC_CATALOG){
        $this->SPECIFIC_CATALOG = $SPECIFIC_CATALOG;
    }

    function setSPECIFIC_SCHEMA($SPECIFIC_SCHEMA){
        $this->SPECIFIC_SCHEMA = $SPECIFIC_SCHEMA;
    }

    function setSPECIFIC_NAME($SPECIFIC_NAME){
        $this->SPECIFIC_NAME = $SPECIFIC_NAME;
    }

    function setORDINAL_POSITION($ORDINAL_POSITION){
        $this->ORDINAL_POSITION = $ORDINAL_POSITION;
    }

    function setPARAMETER_MODE($PARAMETER_MODE){
        $this->PARAMETER_MODE = $PARAMETER_MODE;
    }

    function setPARAMETER_NAME($PARAMETER_NAME){
        $this->PARAMETER_NAME = $PARAMETER_NAME;
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

    function setROUTINE_TYPE($ROUTINE_TYPE){
        $this->ROUTINE_TYPE = $ROUTINE_TYPE;
    }

}