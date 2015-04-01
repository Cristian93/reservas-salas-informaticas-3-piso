<?php

class COLLATION_CHARACTER_SET_APPLICABILITYDTO{

    private $COLLATION_NAME;
    private $CHARACTER_SET_NAME;

    function getCOLLATION_NAME(){
       return $this->COLLATION_NAME;
    }

    function getCHARACTER_SET_NAME(){
       return $this->CHARACTER_SET_NAME;
    }

    function setCOLLATION_NAME($COLLATION_NAME){
        $this->COLLATION_NAME = $COLLATION_NAME;
    }

    function setCHARACTER_SET_NAME($CHARACTER_SET_NAME){
        $this->CHARACTER_SET_NAME = $CHARACTER_SET_NAME;
    }

}