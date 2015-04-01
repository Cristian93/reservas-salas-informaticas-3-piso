<?php

class SCHEMATADTO{

    private $CATALOG_NAME;
    private $SCHEMA_NAME;
    private $DEFAULT_CHARACTER_SET_NAME;
    private $DEFAULT_COLLATION_NAME;
    private $SQL_PATH;

    function getCATALOG_NAME(){
       return $this->CATALOG_NAME;
    }

    function getSCHEMA_NAME(){
       return $this->SCHEMA_NAME;
    }

    function getDEFAULT_CHARACTER_SET_NAME(){
       return $this->DEFAULT_CHARACTER_SET_NAME;
    }

    function getDEFAULT_COLLATION_NAME(){
       return $this->DEFAULT_COLLATION_NAME;
    }

    function getSQL_PATH(){
       return $this->SQL_PATH;
    }

    function setCATALOG_NAME($CATALOG_NAME){
        $this->CATALOG_NAME = $CATALOG_NAME;
    }

    function setSCHEMA_NAME($SCHEMA_NAME){
        $this->SCHEMA_NAME = $SCHEMA_NAME;
    }

    function setDEFAULT_CHARACTER_SET_NAME($DEFAULT_CHARACTER_SET_NAME){
        $this->DEFAULT_CHARACTER_SET_NAME = $DEFAULT_CHARACTER_SET_NAME;
    }

    function setDEFAULT_COLLATION_NAME($DEFAULT_COLLATION_NAME){
        $this->DEFAULT_COLLATION_NAME = $DEFAULT_COLLATION_NAME;
    }

    function setSQL_PATH($SQL_PATH){
        $this->SQL_PATH = $SQL_PATH;
    }

}