<?php

class GLOBAL_VARIABLESDTO{

    private $VARIABLE_NAME;
    private $VARIABLE_VALUE;

    function getVARIABLE_NAME(){
       return $this->VARIABLE_NAME;
    }

    function getVARIABLE_VALUE(){
       return $this->VARIABLE_VALUE;
    }

    function setVARIABLE_NAME($VARIABLE_NAME){
        $this->VARIABLE_NAME = $VARIABLE_NAME;
    }

    function setVARIABLE_VALUE($VARIABLE_VALUE){
        $this->VARIABLE_VALUE = $VARIABLE_VALUE;
    }

}