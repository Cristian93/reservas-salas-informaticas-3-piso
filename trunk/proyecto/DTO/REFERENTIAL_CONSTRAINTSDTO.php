<?php

class REFERENTIAL_CONSTRAINTSDTO{

    private $CONSTRAINT_CATALOG;
    private $CONSTRAINT_SCHEMA;
    private $CONSTRAINT_NAME;
    private $UNIQUE_CONSTRAINT_CATALOG;
    private $UNIQUE_CONSTRAINT_SCHEMA;
    private $UNIQUE_CONSTRAINT_NAME;
    private $MATCH_OPTION;
    private $UPDATE_RULE;
    private $DELETE_RULE;
    private $TABLE_NAME;
    private $REFERENCED_TABLE_NAME;

    function getCONSTRAINT_CATALOG(){
       return $this->CONSTRAINT_CATALOG;
    }

    function getCONSTRAINT_SCHEMA(){
       return $this->CONSTRAINT_SCHEMA;
    }

    function getCONSTRAINT_NAME(){
       return $this->CONSTRAINT_NAME;
    }

    function getUNIQUE_CONSTRAINT_CATALOG(){
       return $this->UNIQUE_CONSTRAINT_CATALOG;
    }

    function getUNIQUE_CONSTRAINT_SCHEMA(){
       return $this->UNIQUE_CONSTRAINT_SCHEMA;
    }

    function getUNIQUE_CONSTRAINT_NAME(){
       return $this->UNIQUE_CONSTRAINT_NAME;
    }

    function getMATCH_OPTION(){
       return $this->MATCH_OPTION;
    }

    function getUPDATE_RULE(){
       return $this->UPDATE_RULE;
    }

    function getDELETE_RULE(){
       return $this->DELETE_RULE;
    }

    function getTABLE_NAME(){
       return $this->TABLE_NAME;
    }

    function getREFERENCED_TABLE_NAME(){
       return $this->REFERENCED_TABLE_NAME;
    }

    function setCONSTRAINT_CATALOG($CONSTRAINT_CATALOG){
        $this->CONSTRAINT_CATALOG = $CONSTRAINT_CATALOG;
    }

    function setCONSTRAINT_SCHEMA($CONSTRAINT_SCHEMA){
        $this->CONSTRAINT_SCHEMA = $CONSTRAINT_SCHEMA;
    }

    function setCONSTRAINT_NAME($CONSTRAINT_NAME){
        $this->CONSTRAINT_NAME = $CONSTRAINT_NAME;
    }

    function setUNIQUE_CONSTRAINT_CATALOG($UNIQUE_CONSTRAINT_CATALOG){
        $this->UNIQUE_CONSTRAINT_CATALOG = $UNIQUE_CONSTRAINT_CATALOG;
    }

    function setUNIQUE_CONSTRAINT_SCHEMA($UNIQUE_CONSTRAINT_SCHEMA){
        $this->UNIQUE_CONSTRAINT_SCHEMA = $UNIQUE_CONSTRAINT_SCHEMA;
    }

    function setUNIQUE_CONSTRAINT_NAME($UNIQUE_CONSTRAINT_NAME){
        $this->UNIQUE_CONSTRAINT_NAME = $UNIQUE_CONSTRAINT_NAME;
    }

    function setMATCH_OPTION($MATCH_OPTION){
        $this->MATCH_OPTION = $MATCH_OPTION;
    }

    function setUPDATE_RULE($UPDATE_RULE){
        $this->UPDATE_RULE = $UPDATE_RULE;
    }

    function setDELETE_RULE($DELETE_RULE){
        $this->DELETE_RULE = $DELETE_RULE;
    }

    function setTABLE_NAME($TABLE_NAME){
        $this->TABLE_NAME = $TABLE_NAME;
    }

    function setREFERENCED_TABLE_NAME($REFERENCED_TABLE_NAME){
        $this->REFERENCED_TABLE_NAME = $REFERENCED_TABLE_NAME;
    }

}