<?php

class PLUGINSDTO{

    private $PLUGIN_NAME;
    private $PLUGIN_VERSION;
    private $PLUGIN_STATUS;
    private $PLUGIN_TYPE;
    private $PLUGIN_TYPE_VERSION;
    private $PLUGIN_LIBRARY;
    private $PLUGIN_LIBRARY_VERSION;
    private $PLUGIN_AUTHOR;
    private $PLUGIN_DESCRIPTION;
    private $PLUGIN_LICENSE;
    private $LOAD_OPTION;

    function getPLUGIN_NAME(){
       return $this->PLUGIN_NAME;
    }

    function getPLUGIN_VERSION(){
       return $this->PLUGIN_VERSION;
    }

    function getPLUGIN_STATUS(){
       return $this->PLUGIN_STATUS;
    }

    function getPLUGIN_TYPE(){
       return $this->PLUGIN_TYPE;
    }

    function getPLUGIN_TYPE_VERSION(){
       return $this->PLUGIN_TYPE_VERSION;
    }

    function getPLUGIN_LIBRARY(){
       return $this->PLUGIN_LIBRARY;
    }

    function getPLUGIN_LIBRARY_VERSION(){
       return $this->PLUGIN_LIBRARY_VERSION;
    }

    function getPLUGIN_AUTHOR(){
       return $this->PLUGIN_AUTHOR;
    }

    function getPLUGIN_DESCRIPTION(){
       return $this->PLUGIN_DESCRIPTION;
    }

    function getPLUGIN_LICENSE(){
       return $this->PLUGIN_LICENSE;
    }

    function getLOAD_OPTION(){
       return $this->LOAD_OPTION;
    }

    function setPLUGIN_NAME($PLUGIN_NAME){
        $this->PLUGIN_NAME = $PLUGIN_NAME;
    }

    function setPLUGIN_VERSION($PLUGIN_VERSION){
        $this->PLUGIN_VERSION = $PLUGIN_VERSION;
    }

    function setPLUGIN_STATUS($PLUGIN_STATUS){
        $this->PLUGIN_STATUS = $PLUGIN_STATUS;
    }

    function setPLUGIN_TYPE($PLUGIN_TYPE){
        $this->PLUGIN_TYPE = $PLUGIN_TYPE;
    }

    function setPLUGIN_TYPE_VERSION($PLUGIN_TYPE_VERSION){
        $this->PLUGIN_TYPE_VERSION = $PLUGIN_TYPE_VERSION;
    }

    function setPLUGIN_LIBRARY($PLUGIN_LIBRARY){
        $this->PLUGIN_LIBRARY = $PLUGIN_LIBRARY;
    }

    function setPLUGIN_LIBRARY_VERSION($PLUGIN_LIBRARY_VERSION){
        $this->PLUGIN_LIBRARY_VERSION = $PLUGIN_LIBRARY_VERSION;
    }

    function setPLUGIN_AUTHOR($PLUGIN_AUTHOR){
        $this->PLUGIN_AUTHOR = $PLUGIN_AUTHOR;
    }

    function setPLUGIN_DESCRIPTION($PLUGIN_DESCRIPTION){
        $this->PLUGIN_DESCRIPTION = $PLUGIN_DESCRIPTION;
    }

    function setPLUGIN_LICENSE($PLUGIN_LICENSE){
        $this->PLUGIN_LICENSE = $PLUGIN_LICENSE;
    }

    function setLOAD_OPTION($LOAD_OPTION){
        $this->LOAD_OPTION = $LOAD_OPTION;
    }

}