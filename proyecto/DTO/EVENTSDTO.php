<?php

class EVENTSDTO{

    private $EVENT_CATALOG;
    private $EVENT_SCHEMA;
    private $EVENT_NAME;
    private $DEFINER;
    private $TIME_ZONE;
    private $EVENT_BODY;
    private $EVENT_DEFINITION;
    private $EVENT_TYPE;
    private $EXECUTE_AT;
    private $INTERVAL_VALUE;
    private $INTERVAL_FIELD;
    private $SQL_MODE;
    private $STARTS;
    private $ENDS;
    private $STATUS;
    private $ON_COMPLETION;
    private $CREATED;
    private $LAST_ALTERED;
    private $LAST_EXECUTED;
    private $EVENT_COMMENT;
    private $ORIGINATOR;
    private $CHARACTER_SET_CLIENT;
    private $COLLATION_CONNECTION;
    private $DATABASE_COLLATION;

    function getEVENT_CATALOG(){
       return $this->EVENT_CATALOG;
    }

    function getEVENT_SCHEMA(){
       return $this->EVENT_SCHEMA;
    }

    function getEVENT_NAME(){
       return $this->EVENT_NAME;
    }

    function getDEFINER(){
       return $this->DEFINER;
    }

    function getTIME_ZONE(){
       return $this->TIME_ZONE;
    }

    function getEVENT_BODY(){
       return $this->EVENT_BODY;
    }

    function getEVENT_DEFINITION(){
       return $this->EVENT_DEFINITION;
    }

    function getEVENT_TYPE(){
       return $this->EVENT_TYPE;
    }

    function getEXECUTE_AT(){
       return $this->EXECUTE_AT;
    }

    function getINTERVAL_VALUE(){
       return $this->INTERVAL_VALUE;
    }

    function getINTERVAL_FIELD(){
       return $this->INTERVAL_FIELD;
    }

    function getSQL_MODE(){
       return $this->SQL_MODE;
    }

    function getSTARTS(){
       return $this->STARTS;
    }

    function getENDS(){
       return $this->ENDS;
    }

    function getSTATUS(){
       return $this->STATUS;
    }

    function getON_COMPLETION(){
       return $this->ON_COMPLETION;
    }

    function getCREATED(){
       return $this->CREATED;
    }

    function getLAST_ALTERED(){
       return $this->LAST_ALTERED;
    }

    function getLAST_EXECUTED(){
       return $this->LAST_EXECUTED;
    }

    function getEVENT_COMMENT(){
       return $this->EVENT_COMMENT;
    }

    function getORIGINATOR(){
       return $this->ORIGINATOR;
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

    function setEVENT_CATALOG($EVENT_CATALOG){
        $this->EVENT_CATALOG = $EVENT_CATALOG;
    }

    function setEVENT_SCHEMA($EVENT_SCHEMA){
        $this->EVENT_SCHEMA = $EVENT_SCHEMA;
    }

    function setEVENT_NAME($EVENT_NAME){
        $this->EVENT_NAME = $EVENT_NAME;
    }

    function setDEFINER($DEFINER){
        $this->DEFINER = $DEFINER;
    }

    function setTIME_ZONE($TIME_ZONE){
        $this->TIME_ZONE = $TIME_ZONE;
    }

    function setEVENT_BODY($EVENT_BODY){
        $this->EVENT_BODY = $EVENT_BODY;
    }

    function setEVENT_DEFINITION($EVENT_DEFINITION){
        $this->EVENT_DEFINITION = $EVENT_DEFINITION;
    }

    function setEVENT_TYPE($EVENT_TYPE){
        $this->EVENT_TYPE = $EVENT_TYPE;
    }

    function setEXECUTE_AT($EXECUTE_AT){
        $this->EXECUTE_AT = $EXECUTE_AT;
    }

    function setINTERVAL_VALUE($INTERVAL_VALUE){
        $this->INTERVAL_VALUE = $INTERVAL_VALUE;
    }

    function setINTERVAL_FIELD($INTERVAL_FIELD){
        $this->INTERVAL_FIELD = $INTERVAL_FIELD;
    }

    function setSQL_MODE($SQL_MODE){
        $this->SQL_MODE = $SQL_MODE;
    }

    function setSTARTS($STARTS){
        $this->STARTS = $STARTS;
    }

    function setENDS($ENDS){
        $this->ENDS = $ENDS;
    }

    function setSTATUS($STATUS){
        $this->STATUS = $STATUS;
    }

    function setON_COMPLETION($ON_COMPLETION){
        $this->ON_COMPLETION = $ON_COMPLETION;
    }

    function setCREATED($CREATED){
        $this->CREATED = $CREATED;
    }

    function setLAST_ALTERED($LAST_ALTERED){
        $this->LAST_ALTERED = $LAST_ALTERED;
    }

    function setLAST_EXECUTED($LAST_EXECUTED){
        $this->LAST_EXECUTED = $LAST_EXECUTED;
    }

    function setEVENT_COMMENT($EVENT_COMMENT){
        $this->EVENT_COMMENT = $EVENT_COMMENT;
    }

    function setORIGINATOR($ORIGINATOR){
        $this->ORIGINATOR = $ORIGINATOR;
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