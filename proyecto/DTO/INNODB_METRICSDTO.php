<?php

class INNODB_METRICSDTO{

    private $NAME;
    private $SUBSYSTEM;
    private $COUNT;
    private $MAX_COUNT;
    private $MIN_COUNT;
    private $AVG_COUNT;
    private $COUNT_RESET;
    private $MAX_COUNT_RESET;
    private $MIN_COUNT_RESET;
    private $AVG_COUNT_RESET;
    private $TIME_ENABLED;
    private $TIME_DISABLED;
    private $TIME_ELAPSED;
    private $TIME_RESET;
    private $STATUS;
    private $TYPE;
    private $COMMENT;

    function getNAME(){
       return $this->NAME;
    }

    function getSUBSYSTEM(){
       return $this->SUBSYSTEM;
    }

    function getCOUNT(){
       return $this->COUNT;
    }

    function getMAX_COUNT(){
       return $this->MAX_COUNT;
    }

    function getMIN_COUNT(){
       return $this->MIN_COUNT;
    }

    function getAVG_COUNT(){
       return $this->AVG_COUNT;
    }

    function getCOUNT_RESET(){
       return $this->COUNT_RESET;
    }

    function getMAX_COUNT_RESET(){
       return $this->MAX_COUNT_RESET;
    }

    function getMIN_COUNT_RESET(){
       return $this->MIN_COUNT_RESET;
    }

    function getAVG_COUNT_RESET(){
       return $this->AVG_COUNT_RESET;
    }

    function getTIME_ENABLED(){
       return $this->TIME_ENABLED;
    }

    function getTIME_DISABLED(){
       return $this->TIME_DISABLED;
    }

    function getTIME_ELAPSED(){
       return $this->TIME_ELAPSED;
    }

    function getTIME_RESET(){
       return $this->TIME_RESET;
    }

    function getSTATUS(){
       return $this->STATUS;
    }

    function getTYPE(){
       return $this->TYPE;
    }

    function getCOMMENT(){
       return $this->COMMENT;
    }

    function setNAME($NAME){
        $this->NAME = $NAME;
    }

    function setSUBSYSTEM($SUBSYSTEM){
        $this->SUBSYSTEM = $SUBSYSTEM;
    }

    function setCOUNT($COUNT){
        $this->COUNT = $COUNT;
    }

    function setMAX_COUNT($MAX_COUNT){
        $this->MAX_COUNT = $MAX_COUNT;
    }

    function setMIN_COUNT($MIN_COUNT){
        $this->MIN_COUNT = $MIN_COUNT;
    }

    function setAVG_COUNT($AVG_COUNT){
        $this->AVG_COUNT = $AVG_COUNT;
    }

    function setCOUNT_RESET($COUNT_RESET){
        $this->COUNT_RESET = $COUNT_RESET;
    }

    function setMAX_COUNT_RESET($MAX_COUNT_RESET){
        $this->MAX_COUNT_RESET = $MAX_COUNT_RESET;
    }

    function setMIN_COUNT_RESET($MIN_COUNT_RESET){
        $this->MIN_COUNT_RESET = $MIN_COUNT_RESET;
    }

    function setAVG_COUNT_RESET($AVG_COUNT_RESET){
        $this->AVG_COUNT_RESET = $AVG_COUNT_RESET;
    }

    function setTIME_ENABLED($TIME_ENABLED){
        $this->TIME_ENABLED = $TIME_ENABLED;
    }

    function setTIME_DISABLED($TIME_DISABLED){
        $this->TIME_DISABLED = $TIME_DISABLED;
    }

    function setTIME_ELAPSED($TIME_ELAPSED){
        $this->TIME_ELAPSED = $TIME_ELAPSED;
    }

    function setTIME_RESET($TIME_RESET){
        $this->TIME_RESET = $TIME_RESET;
    }

    function setSTATUS($STATUS){
        $this->STATUS = $STATUS;
    }

    function setTYPE($TYPE){
        $this->TYPE = $TYPE;
    }

    function setCOMMENT($COMMENT){
        $this->COMMENT = $COMMENT;
    }

}