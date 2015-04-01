<?php

class TABLESPACESDTO{

    private $TABLESPACE_NAME;
    private $ENGINE;
    private $TABLESPACE_TYPE;
    private $LOGFILE_GROUP_NAME;
    private $EXTENT_SIZE;
    private $AUTOEXTEND_SIZE;
    private $MAXIMUM_SIZE;
    private $NODEGROUP_ID;
    private $TABLESPACE_COMMENT;

    function getTABLESPACE_NAME(){
       return $this->TABLESPACE_NAME;
    }

    function getENGINE(){
       return $this->ENGINE;
    }

    function getTABLESPACE_TYPE(){
       return $this->TABLESPACE_TYPE;
    }

    function getLOGFILE_GROUP_NAME(){
       return $this->LOGFILE_GROUP_NAME;
    }

    function getEXTENT_SIZE(){
       return $this->EXTENT_SIZE;
    }

    function getAUTOEXTEND_SIZE(){
       return $this->AUTOEXTEND_SIZE;
    }

    function getMAXIMUM_SIZE(){
       return $this->MAXIMUM_SIZE;
    }

    function getNODEGROUP_ID(){
       return $this->NODEGROUP_ID;
    }

    function getTABLESPACE_COMMENT(){
       return $this->TABLESPACE_COMMENT;
    }

    function setTABLESPACE_NAME($TABLESPACE_NAME){
        $this->TABLESPACE_NAME = $TABLESPACE_NAME;
    }

    function setENGINE($ENGINE){
        $this->ENGINE = $ENGINE;
    }

    function setTABLESPACE_TYPE($TABLESPACE_TYPE){
        $this->TABLESPACE_TYPE = $TABLESPACE_TYPE;
    }

    function setLOGFILE_GROUP_NAME($LOGFILE_GROUP_NAME){
        $this->LOGFILE_GROUP_NAME = $LOGFILE_GROUP_NAME;
    }

    function setEXTENT_SIZE($EXTENT_SIZE){
        $this->EXTENT_SIZE = $EXTENT_SIZE;
    }

    function setAUTOEXTEND_SIZE($AUTOEXTEND_SIZE){
        $this->AUTOEXTEND_SIZE = $AUTOEXTEND_SIZE;
    }

    function setMAXIMUM_SIZE($MAXIMUM_SIZE){
        $this->MAXIMUM_SIZE = $MAXIMUM_SIZE;
    }

    function setNODEGROUP_ID($NODEGROUP_ID){
        $this->NODEGROUP_ID = $NODEGROUP_ID;
    }

    function setTABLESPACE_COMMENT($TABLESPACE_COMMENT){
        $this->TABLESPACE_COMMENT = $TABLESPACE_COMMENT;
    }

}