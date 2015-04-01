<?php

class INNODB_SYS_FOREIGN_COLSDTO{

    private $ID;
    private $FOR_COL_NAME;
    private $REF_COL_NAME;
    private $POS;

    function getID(){
       return $this->ID;
    }

    function getFOR_COL_NAME(){
       return $this->FOR_COL_NAME;
    }

    function getREF_COL_NAME(){
       return $this->REF_COL_NAME;
    }

    function getPOS(){
       return $this->POS;
    }

    function setID($ID){
        $this->ID = $ID;
    }

    function setFOR_COL_NAME($FOR_COL_NAME){
        $this->FOR_COL_NAME = $FOR_COL_NAME;
    }

    function setREF_COL_NAME($REF_COL_NAME){
        $this->REF_COL_NAME = $REF_COL_NAME;
    }

    function setPOS($POS){
        $this->POS = $POS;
    }

}