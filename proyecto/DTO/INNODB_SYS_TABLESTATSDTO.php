<?php

class INNODB_SYS_TABLESTATSDTO{

    private $TABLE_ID;
    private $NAME;
    private $STATS_INITIALIZED;
    private $NUM_ROWS;
    private $CLUST_INDEX_SIZE;
    private $OTHER_INDEX_SIZE;
    private $MODIFIED_COUNTER;
    private $AUTOINC;
    private $REF_COUNT;

    function getTABLE_ID(){
       return $this->TABLE_ID;
    }

    function getNAME(){
       return $this->NAME;
    }

    function getSTATS_INITIALIZED(){
       return $this->STATS_INITIALIZED;
    }

    function getNUM_ROWS(){
       return $this->NUM_ROWS;
    }

    function getCLUST_INDEX_SIZE(){
       return $this->CLUST_INDEX_SIZE;
    }

    function getOTHER_INDEX_SIZE(){
       return $this->OTHER_INDEX_SIZE;
    }

    function getMODIFIED_COUNTER(){
       return $this->MODIFIED_COUNTER;
    }

    function getAUTOINC(){
       return $this->AUTOINC;
    }

    function getREF_COUNT(){
       return $this->REF_COUNT;
    }

    function setTABLE_ID($TABLE_ID){
        $this->TABLE_ID = $TABLE_ID;
    }

    function setNAME($NAME){
        $this->NAME = $NAME;
    }

    function setSTATS_INITIALIZED($STATS_INITIALIZED){
        $this->STATS_INITIALIZED = $STATS_INITIALIZED;
    }

    function setNUM_ROWS($NUM_ROWS){
        $this->NUM_ROWS = $NUM_ROWS;
    }

    function setCLUST_INDEX_SIZE($CLUST_INDEX_SIZE){
        $this->CLUST_INDEX_SIZE = $CLUST_INDEX_SIZE;
    }

    function setOTHER_INDEX_SIZE($OTHER_INDEX_SIZE){
        $this->OTHER_INDEX_SIZE = $OTHER_INDEX_SIZE;
    }

    function setMODIFIED_COUNTER($MODIFIED_COUNTER){
        $this->MODIFIED_COUNTER = $MODIFIED_COUNTER;
    }

    function setAUTOINC($AUTOINC){
        $this->AUTOINC = $AUTOINC;
    }

    function setREF_COUNT($REF_COUNT){
        $this->REF_COUNT = $REF_COUNT;
    }

}