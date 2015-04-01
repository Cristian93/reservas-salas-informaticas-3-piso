<?php

class OPTIMIZER_TRACEDTO{

    private $QUERY;
    private $TRACE;
    private $MISSING_BYTES_BEYOND_MAX_MEM_SIZE;
    private $INSUFFICIENT_PRIVILEGES;

    function getQUERY(){
       return $this->QUERY;
    }

    function getTRACE(){
       return $this->TRACE;
    }

    function getMISSING_BYTES_BEYOND_MAX_MEM_SIZE(){
       return $this->MISSING_BYTES_BEYOND_MAX_MEM_SIZE;
    }

    function getINSUFFICIENT_PRIVILEGES(){
       return $this->INSUFFICIENT_PRIVILEGES;
    }

    function setQUERY($QUERY){
        $this->QUERY = $QUERY;
    }

    function setTRACE($TRACE){
        $this->TRACE = $TRACE;
    }

    function setMISSING_BYTES_BEYOND_MAX_MEM_SIZE($MISSING_BYTES_BEYOND_MAX_MEM_SIZE){
        $this->MISSING_BYTES_BEYOND_MAX_MEM_SIZE = $MISSING_BYTES_BEYOND_MAX_MEM_SIZE;
    }

    function setINSUFFICIENT_PRIVILEGES($INSUFFICIENT_PRIVILEGES){
        $this->INSUFFICIENT_PRIVILEGES = $INSUFFICIENT_PRIVILEGES;
    }

}