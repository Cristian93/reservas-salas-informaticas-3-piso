<?php

class PROCESSLISTDTO{

    private $ID;
    private $USER;
    private $HOST;
    private $DB;
    private $COMMAND;
    private $TIME;
    private $STATE;
    private $INFO;

    function getID(){
       return $this->ID;
    }

    function getUSER(){
       return $this->USER;
    }

    function getHOST(){
       return $this->HOST;
    }

    function getDB(){
       return $this->DB;
    }

    function getCOMMAND(){
       return $this->COMMAND;
    }

    function getTIME(){
       return $this->TIME;
    }

    function getSTATE(){
       return $this->STATE;
    }

    function getINFO(){
       return $this->INFO;
    }

    function setID($ID){
        $this->ID = $ID;
    }

    function setUSER($USER){
        $this->USER = $USER;
    }

    function setHOST($HOST){
        $this->HOST = $HOST;
    }

    function setDB($DB){
        $this->DB = $DB;
    }

    function setCOMMAND($COMMAND){
        $this->COMMAND = $COMMAND;
    }

    function setTIME($TIME){
        $this->TIME = $TIME;
    }

    function setSTATE($STATE){
        $this->STATE = $STATE;
    }

    function setINFO($INFO){
        $this->INFO = $INFO;
    }

}