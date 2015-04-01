<?php

class TRIGGERSDTO{

    private $TRIGGER_CATALOG;
    private $TRIGGER_SCHEMA;
    private $TRIGGER_NAME;
    private $EVENT_MANIPULATION;
    private $EVENT_OBJECT_CATALOG;
    private $EVENT_OBJECT_SCHEMA;
    private $EVENT_OBJECT_TABLE;
    private $ACTION_ORDER;
    private $ACTION_CONDITION;
    private $ACTION_STATEMENT;
    private $ACTION_ORIENTATION;
    private $ACTION_TIMING;
    private $ACTION_REFERENCE_OLD_TABLE;
    private $ACTION_REFERENCE_NEW_TABLE;
    private $ACTION_REFERENCE_OLD_ROW;
    private $ACTION_REFERENCE_NEW_ROW;
    private $CREATED;
    private $SQL_MODE;
    private $DEFINER;
    private $CHARACTER_SET_CLIENT;
    private $COLLATION_CONNECTION;
    private $DATABASE_COLLATION;

    function getTRIGGER_CATALOG(){
       return $this->TRIGGER_CATALOG;
    }

    function getTRIGGER_SCHEMA(){
       return $this->TRIGGER_SCHEMA;
    }

    function getTRIGGER_NAME(){
       return $this->TRIGGER_NAME;
    }

    function getEVENT_MANIPULATION(){
       return $this->EVENT_MANIPULATION;
    }

    function getEVENT_OBJECT_CATALOG(){
       return $this->EVENT_OBJECT_CATALOG;
    }

    function getEVENT_OBJECT_SCHEMA(){
       return $this->EVENT_OBJECT_SCHEMA;
    }

    function getEVENT_OBJECT_TABLE(){
       return $this->EVENT_OBJECT_TABLE;
    }

    function getACTION_ORDER(){
       return $this->ACTION_ORDER;
    }

    function getACTION_CONDITION(){
       return $this->ACTION_CONDITION;
    }

    function getACTION_STATEMENT(){
       return $this->ACTION_STATEMENT;
    }

    function getACTION_ORIENTATION(){
       return $this->ACTION_ORIENTATION;
    }

    function getACTION_TIMING(){
       return $this->ACTION_TIMING;
    }

    function getACTION_REFERENCE_OLD_TABLE(){
       return $this->ACTION_REFERENCE_OLD_TABLE;
    }

    function getACTION_REFERENCE_NEW_TABLE(){
       return $this->ACTION_REFERENCE_NEW_TABLE;
    }

    function getACTION_REFERENCE_OLD_ROW(){
       return $this->ACTION_REFERENCE_OLD_ROW;
    }

    function getACTION_REFERENCE_NEW_ROW(){
       return $this->ACTION_REFERENCE_NEW_ROW;
    }

    function getCREATED(){
       return $this->CREATED;
    }

    function getSQL_MODE(){
       return $this->SQL_MODE;
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

    function setTRIGGER_CATALOG($TRIGGER_CATALOG){
        $this->TRIGGER_CATALOG = $TRIGGER_CATALOG;
    }

    function setTRIGGER_SCHEMA($TRIGGER_SCHEMA){
        $this->TRIGGER_SCHEMA = $TRIGGER_SCHEMA;
    }

    function setTRIGGER_NAME($TRIGGER_NAME){
        $this->TRIGGER_NAME = $TRIGGER_NAME;
    }

    function setEVENT_MANIPULATION($EVENT_MANIPULATION){
        $this->EVENT_MANIPULATION = $EVENT_MANIPULATION;
    }

    function setEVENT_OBJECT_CATALOG($EVENT_OBJECT_CATALOG){
        $this->EVENT_OBJECT_CATALOG = $EVENT_OBJECT_CATALOG;
    }

    function setEVENT_OBJECT_SCHEMA($EVENT_OBJECT_SCHEMA){
        $this->EVENT_OBJECT_SCHEMA = $EVENT_OBJECT_SCHEMA;
    }

    function setEVENT_OBJECT_TABLE($EVENT_OBJECT_TABLE){
        $this->EVENT_OBJECT_TABLE = $EVENT_OBJECT_TABLE;
    }

    function setACTION_ORDER($ACTION_ORDER){
        $this->ACTION_ORDER = $ACTION_ORDER;
    }

    function setACTION_CONDITION($ACTION_CONDITION){
        $this->ACTION_CONDITION = $ACTION_CONDITION;
    }

    function setACTION_STATEMENT($ACTION_STATEMENT){
        $this->ACTION_STATEMENT = $ACTION_STATEMENT;
    }

    function setACTION_ORIENTATION($ACTION_ORIENTATION){
        $this->ACTION_ORIENTATION = $ACTION_ORIENTATION;
    }

    function setACTION_TIMING($ACTION_TIMING){
        $this->ACTION_TIMING = $ACTION_TIMING;
    }

    function setACTION_REFERENCE_OLD_TABLE($ACTION_REFERENCE_OLD_TABLE){
        $this->ACTION_REFERENCE_OLD_TABLE = $ACTION_REFERENCE_OLD_TABLE;
    }

    function setACTION_REFERENCE_NEW_TABLE($ACTION_REFERENCE_NEW_TABLE){
        $this->ACTION_REFERENCE_NEW_TABLE = $ACTION_REFERENCE_NEW_TABLE;
    }

    function setACTION_REFERENCE_OLD_ROW($ACTION_REFERENCE_OLD_ROW){
        $this->ACTION_REFERENCE_OLD_ROW = $ACTION_REFERENCE_OLD_ROW;
    }

    function setACTION_REFERENCE_NEW_ROW($ACTION_REFERENCE_NEW_ROW){
        $this->ACTION_REFERENCE_NEW_ROW = $ACTION_REFERENCE_NEW_ROW;
    }

    function setCREATED($CREATED){
        $this->CREATED = $CREATED;
    }

    function setSQL_MODE($SQL_MODE){
        $this->SQL_MODE = $SQL_MODE;
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