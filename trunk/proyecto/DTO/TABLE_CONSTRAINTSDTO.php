<?php

class TABLE_CONSTRAINTSDTO{

    private $CONSTRAINT_CATALOG;
    private $CONSTRAINT_SCHEMA;
    private $CONSTRAINT_NAME;
    private $TABLE_SCHEMA;
    private $TABLE_NAME;
    private $CONSTRAINT_TYPE;

    function getCONSTRAINT_CATALOG(){
       return $this->CONSTRAINT_CATALOG;
    }

    function getCONSTRAINT_SCHEMA(){
       return $this->CONSTRAINT_SCHEMA;
    }

    function getCONSTRAINT_NAME(){
       return $this->CONSTRAINT_NAME;
    }

    function getTABLE_SCHEMA(){
       return $this->TABLE_SCHEMA;
    }

    function getTABLE_NAME(){
       return $this->TABLE_NAME;
    }

    function getCONSTRAINT_TYPE(){
       return $this->CONSTRAINT_TYPE;
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

    function setTABLE_SCHEMA($TABLE_SCHEMA){
        $this->TABLE_SCHEMA = $TABLE_SCHEMA;
    }

    function setTABLE_NAME($TABLE_NAME){
        $this->TABLE_NAME = $TABLE_NAME;
    }

    function setCONSTRAINT_TYPE($CONSTRAINT_TYPE){
        $this->CONSTRAINT_TYPE = $CONSTRAINT_TYPE;
    }

}