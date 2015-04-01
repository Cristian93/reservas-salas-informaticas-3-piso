<?php

class VIEWSDTO{

    private $TABLE_CATALOG;
    private $TABLE_SCHEMA;
    private $TABLE_NAME;
    private $VIEW_DEFINITION;
    private $CHECK_OPTION;
    private $IS_UPDATABLE;
    private $DEFINER;
    private $SECURITY_TYPE;
    private $CHARACTER_SET_CLIENT;
    private $COLLATION_CONNECTION;

    function getTABLE_CATALOG(){
       return $this->TABLE_CATALOG;
    }

    function getTABLE_SCHEMA(){
       return $this->TABLE_SCHEMA;
    }

    function getTABLE_NAME(){
       return $this->TABLE_NAME;
    }

    function getVIEW_DEFINITION(){
       return $this->VIEW_DEFINITION;
    }

    function getCHECK_OPTION(){
       return $this->CHECK_OPTION;
    }

    function getIS_UPDATABLE(){
       return $this->IS_UPDATABLE;
    }

    function getDEFINER(){
       return $this->DEFINER;
    }

    function getSECURITY_TYPE(){
       return $this->SECURITY_TYPE;
    }

    function getCHARACTER_SET_CLIENT(){
       return $this->CHARACTER_SET_CLIENT;
    }

    function getCOLLATION_CONNECTION(){
       return $this->COLLATION_CONNECTION;
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

    function setVIEW_DEFINITION($VIEW_DEFINITION){
        $this->VIEW_DEFINITION = $VIEW_DEFINITION;
    }

    function setCHECK_OPTION($CHECK_OPTION){
        $this->CHECK_OPTION = $CHECK_OPTION;
    }

    function setIS_UPDATABLE($IS_UPDATABLE){
        $this->IS_UPDATABLE = $IS_UPDATABLE;
    }

    function setDEFINER($DEFINER){
        $this->DEFINER = $DEFINER;
    }

    function setSECURITY_TYPE($SECURITY_TYPE){
        $this->SECURITY_TYPE = $SECURITY_TYPE;
    }

    function setCHARACTER_SET_CLIENT($CHARACTER_SET_CLIENT){
        $this->CHARACTER_SET_CLIENT = $CHARACTER_SET_CLIENT;
    }

    function setCOLLATION_CONNECTION($COLLATION_CONNECTION){
        $this->COLLATION_CONNECTION = $COLLATION_CONNECTION;
    }

}