<?php

class INNODB_SYS_FOREIGNDTO{

    private $ID;
    private $FOR_NAME;
    private $REF_NAME;
    private $N_COLS;
    private $TYPE;

    function getID(){
       return $this->ID;
    }

    function getFOR_NAME(){
       return $this->FOR_NAME;
    }

    function getREF_NAME(){
       return $this->REF_NAME;
    }

    function getN_COLS(){
       return $this->N_COLS;
    }

    function getTYPE(){
       return $this->TYPE;
    }

    function setID($ID){
        $this->ID = $ID;
    }

    function setFOR_NAME($FOR_NAME){
        $this->FOR_NAME = $FOR_NAME;
    }

    function setREF_NAME($REF_NAME){
        $this->REF_NAME = $REF_NAME;
    }

    function setN_COLS($N_COLS){
        $this->N_COLS = $N_COLS;
    }

    function setTYPE($TYPE){
        $this->TYPE = $TYPE;
    }

}