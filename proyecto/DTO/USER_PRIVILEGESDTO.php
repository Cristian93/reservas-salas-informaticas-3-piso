<?php

class USER_PRIVILEGESDTO{

    private $GRANTEE;
    private $TABLE_CATALOG;
    private $PRIVILEGE_TYPE;
    private $IS_GRANTABLE;

    function getGRANTEE(){
       return $this->GRANTEE;
    }

    function getTABLE_CATALOG(){
       return $this->TABLE_CATALOG;
    }

    function getPRIVILEGE_TYPE(){
       return $this->PRIVILEGE_TYPE;
    }

    function getIS_GRANTABLE(){
       return $this->IS_GRANTABLE;
    }

    function setGRANTEE($GRANTEE){
        $this->GRANTEE = $GRANTEE;
    }

    function setTABLE_CATALOG($TABLE_CATALOG){
        $this->TABLE_CATALOG = $TABLE_CATALOG;
    }

    function setPRIVILEGE_TYPE($PRIVILEGE_TYPE){
        $this->PRIVILEGE_TYPE = $PRIVILEGE_TYPE;
    }

    function setIS_GRANTABLE($IS_GRANTABLE){
        $this->IS_GRANTABLE = $IS_GRANTABLE;
    }

}