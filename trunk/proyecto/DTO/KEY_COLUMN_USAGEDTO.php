<?php

class KEY_COLUMN_USAGEDTO{

    private $CONSTRAINT_CATALOG;
    private $CONSTRAINT_SCHEMA;
    private $CONSTRAINT_NAME;
    private $TABLE_CATALOG;
    private $TABLE_SCHEMA;
    private $TABLE_NAME;
    private $COLUMN_NAME;
    private $ORDINAL_POSITION;
    private $POSITION_IN_UNIQUE_CONSTRAINT;
    private $REFERENCED_TABLE_SCHEMA;
    private $REFERENCED_TABLE_NAME;
    private $REFERENCED_COLUMN_NAME;

    function getCONSTRAINT_CATALOG(){
       return $this->CONSTRAINT_CATALOG;
    }

    function getCONSTRAINT_SCHEMA(){
       return $this->CONSTRAINT_SCHEMA;
    }

    function getCONSTRAINT_NAME(){
       return $this->CONSTRAINT_NAME;
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

    function getCOLUMN_NAME(){
       return $this->COLUMN_NAME;
    }

    function getORDINAL_POSITION(){
       return $this->ORDINAL_POSITION;
    }

    function getPOSITION_IN_UNIQUE_CONSTRAINT(){
       return $this->POSITION_IN_UNIQUE_CONSTRAINT;
    }

    function getREFERENCED_TABLE_SCHEMA(){
       return $this->REFERENCED_TABLE_SCHEMA;
    }

    function getREFERENCED_TABLE_NAME(){
       return $this->REFERENCED_TABLE_NAME;
    }

    function getREFERENCED_COLUMN_NAME(){
       return $this->REFERENCED_COLUMN_NAME;
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

    function setPOSITION_IN_UNIQUE_CONSTRAINT($POSITION_IN_UNIQUE_CONSTRAINT){
        $this->POSITION_IN_UNIQUE_CONSTRAINT = $POSITION_IN_UNIQUE_CONSTRAINT;
    }

    function setREFERENCED_TABLE_SCHEMA($REFERENCED_TABLE_SCHEMA){
        $this->REFERENCED_TABLE_SCHEMA = $REFERENCED_TABLE_SCHEMA;
    }

    function setREFERENCED_TABLE_NAME($REFERENCED_TABLE_NAME){
        $this->REFERENCED_TABLE_NAME = $REFERENCED_TABLE_NAME;
    }

    function setREFERENCED_COLUMN_NAME($REFERENCED_COLUMN_NAME){
        $this->REFERENCED_COLUMN_NAME = $REFERENCED_COLUMN_NAME;
    }

}