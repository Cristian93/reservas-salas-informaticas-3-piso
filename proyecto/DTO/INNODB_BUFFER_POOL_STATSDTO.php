<?php

class INNODB_BUFFER_POOL_STATSDTO{

    private $POOL_ID;
    private $POOL_SIZE;
    private $FREE_BUFFERS;
    private $DATABASE_PAGES;
    private $OLD_DATABASE_PAGES;
    private $MODIFIED_DATABASE_PAGES;
    private $PENDING_DECOMPRESS;
    private $PENDING_READS;
    private $PENDING_FLUSH_LRU;
    private $PENDING_FLUSH_LIST;
    private $PAGES_MADE_YOUNG;
    private $PAGES_NOT_MADE_YOUNG;
    private $PAGES_MADE_YOUNG_RATE;
    private $PAGES_MADE_NOT_YOUNG_RATE;
    private $NUMBER_PAGES_READ;
    private $NUMBER_PAGES_CREATED;
    private $NUMBER_PAGES_WRITTEN;
    private $PAGES_READ_RATE;
    private $PAGES_CREATE_RATE;
    private $PAGES_WRITTEN_RATE;
    private $NUMBER_PAGES_GET;
    private $HIT_RATE;
    private $YOUNG_MAKE_PER_THOUSAND_GETS;
    private $NOT_YOUNG_MAKE_PER_THOUSAND_GETS;
    private $NUMBER_PAGES_READ_AHEAD;
    private $NUMBER_READ_AHEAD_EVICTED;
    private $READ_AHEAD_RATE;
    private $READ_AHEAD_EVICTED_RATE;
    private $LRU_IO_TOTAL;
    private $LRU_IO_CURRENT;
    private $UNCOMPRESS_TOTAL;
    private $UNCOMPRESS_CURRENT;

    function getPOOL_ID(){
       return $this->POOL_ID;
    }

    function getPOOL_SIZE(){
       return $this->POOL_SIZE;
    }

    function getFREE_BUFFERS(){
       return $this->FREE_BUFFERS;
    }

    function getDATABASE_PAGES(){
       return $this->DATABASE_PAGES;
    }

    function getOLD_DATABASE_PAGES(){
       return $this->OLD_DATABASE_PAGES;
    }

    function getMODIFIED_DATABASE_PAGES(){
       return $this->MODIFIED_DATABASE_PAGES;
    }

    function getPENDING_DECOMPRESS(){
       return $this->PENDING_DECOMPRESS;
    }

    function getPENDING_READS(){
       return $this->PENDING_READS;
    }

    function getPENDING_FLUSH_LRU(){
       return $this->PENDING_FLUSH_LRU;
    }

    function getPENDING_FLUSH_LIST(){
       return $this->PENDING_FLUSH_LIST;
    }

    function getPAGES_MADE_YOUNG(){
       return $this->PAGES_MADE_YOUNG;
    }

    function getPAGES_NOT_MADE_YOUNG(){
       return $this->PAGES_NOT_MADE_YOUNG;
    }

    function getPAGES_MADE_YOUNG_RATE(){
       return $this->PAGES_MADE_YOUNG_RATE;
    }

    function getPAGES_MADE_NOT_YOUNG_RATE(){
       return $this->PAGES_MADE_NOT_YOUNG_RATE;
    }

    function getNUMBER_PAGES_READ(){
       return $this->NUMBER_PAGES_READ;
    }

    function getNUMBER_PAGES_CREATED(){
       return $this->NUMBER_PAGES_CREATED;
    }

    function getNUMBER_PAGES_WRITTEN(){
       return $this->NUMBER_PAGES_WRITTEN;
    }

    function getPAGES_READ_RATE(){
       return $this->PAGES_READ_RATE;
    }

    function getPAGES_CREATE_RATE(){
       return $this->PAGES_CREATE_RATE;
    }

    function getPAGES_WRITTEN_RATE(){
       return $this->PAGES_WRITTEN_RATE;
    }

    function getNUMBER_PAGES_GET(){
       return $this->NUMBER_PAGES_GET;
    }

    function getHIT_RATE(){
       return $this->HIT_RATE;
    }

    function getYOUNG_MAKE_PER_THOUSAND_GETS(){
       return $this->YOUNG_MAKE_PER_THOUSAND_GETS;
    }

    function getNOT_YOUNG_MAKE_PER_THOUSAND_GETS(){
       return $this->NOT_YOUNG_MAKE_PER_THOUSAND_GETS;
    }

    function getNUMBER_PAGES_READ_AHEAD(){
       return $this->NUMBER_PAGES_READ_AHEAD;
    }

    function getNUMBER_READ_AHEAD_EVICTED(){
       return $this->NUMBER_READ_AHEAD_EVICTED;
    }

    function getREAD_AHEAD_RATE(){
       return $this->READ_AHEAD_RATE;
    }

    function getREAD_AHEAD_EVICTED_RATE(){
       return $this->READ_AHEAD_EVICTED_RATE;
    }

    function getLRU_IO_TOTAL(){
       return $this->LRU_IO_TOTAL;
    }

    function getLRU_IO_CURRENT(){
       return $this->LRU_IO_CURRENT;
    }

    function getUNCOMPRESS_TOTAL(){
       return $this->UNCOMPRESS_TOTAL;
    }

    function getUNCOMPRESS_CURRENT(){
       return $this->UNCOMPRESS_CURRENT;
    }

    function setPOOL_ID($POOL_ID){
        $this->POOL_ID = $POOL_ID;
    }

    function setPOOL_SIZE($POOL_SIZE){
        $this->POOL_SIZE = $POOL_SIZE;
    }

    function setFREE_BUFFERS($FREE_BUFFERS){
        $this->FREE_BUFFERS = $FREE_BUFFERS;
    }

    function setDATABASE_PAGES($DATABASE_PAGES){
        $this->DATABASE_PAGES = $DATABASE_PAGES;
    }

    function setOLD_DATABASE_PAGES($OLD_DATABASE_PAGES){
        $this->OLD_DATABASE_PAGES = $OLD_DATABASE_PAGES;
    }

    function setMODIFIED_DATABASE_PAGES($MODIFIED_DATABASE_PAGES){
        $this->MODIFIED_DATABASE_PAGES = $MODIFIED_DATABASE_PAGES;
    }

    function setPENDING_DECOMPRESS($PENDING_DECOMPRESS){
        $this->PENDING_DECOMPRESS = $PENDING_DECOMPRESS;
    }

    function setPENDING_READS($PENDING_READS){
        $this->PENDING_READS = $PENDING_READS;
    }

    function setPENDING_FLUSH_LRU($PENDING_FLUSH_LRU){
        $this->PENDING_FLUSH_LRU = $PENDING_FLUSH_LRU;
    }

    function setPENDING_FLUSH_LIST($PENDING_FLUSH_LIST){
        $this->PENDING_FLUSH_LIST = $PENDING_FLUSH_LIST;
    }

    function setPAGES_MADE_YOUNG($PAGES_MADE_YOUNG){
        $this->PAGES_MADE_YOUNG = $PAGES_MADE_YOUNG;
    }

    function setPAGES_NOT_MADE_YOUNG($PAGES_NOT_MADE_YOUNG){
        $this->PAGES_NOT_MADE_YOUNG = $PAGES_NOT_MADE_YOUNG;
    }

    function setPAGES_MADE_YOUNG_RATE($PAGES_MADE_YOUNG_RATE){
        $this->PAGES_MADE_YOUNG_RATE = $PAGES_MADE_YOUNG_RATE;
    }

    function setPAGES_MADE_NOT_YOUNG_RATE($PAGES_MADE_NOT_YOUNG_RATE){
        $this->PAGES_MADE_NOT_YOUNG_RATE = $PAGES_MADE_NOT_YOUNG_RATE;
    }

    function setNUMBER_PAGES_READ($NUMBER_PAGES_READ){
        $this->NUMBER_PAGES_READ = $NUMBER_PAGES_READ;
    }

    function setNUMBER_PAGES_CREATED($NUMBER_PAGES_CREATED){
        $this->NUMBER_PAGES_CREATED = $NUMBER_PAGES_CREATED;
    }

    function setNUMBER_PAGES_WRITTEN($NUMBER_PAGES_WRITTEN){
        $this->NUMBER_PAGES_WRITTEN = $NUMBER_PAGES_WRITTEN;
    }

    function setPAGES_READ_RATE($PAGES_READ_RATE){
        $this->PAGES_READ_RATE = $PAGES_READ_RATE;
    }

    function setPAGES_CREATE_RATE($PAGES_CREATE_RATE){
        $this->PAGES_CREATE_RATE = $PAGES_CREATE_RATE;
    }

    function setPAGES_WRITTEN_RATE($PAGES_WRITTEN_RATE){
        $this->PAGES_WRITTEN_RATE = $PAGES_WRITTEN_RATE;
    }

    function setNUMBER_PAGES_GET($NUMBER_PAGES_GET){
        $this->NUMBER_PAGES_GET = $NUMBER_PAGES_GET;
    }

    function setHIT_RATE($HIT_RATE){
        $this->HIT_RATE = $HIT_RATE;
    }

    function setYOUNG_MAKE_PER_THOUSAND_GETS($YOUNG_MAKE_PER_THOUSAND_GETS){
        $this->YOUNG_MAKE_PER_THOUSAND_GETS = $YOUNG_MAKE_PER_THOUSAND_GETS;
    }

    function setNOT_YOUNG_MAKE_PER_THOUSAND_GETS($NOT_YOUNG_MAKE_PER_THOUSAND_GETS){
        $this->NOT_YOUNG_MAKE_PER_THOUSAND_GETS = $NOT_YOUNG_MAKE_PER_THOUSAND_GETS;
    }

    function setNUMBER_PAGES_READ_AHEAD($NUMBER_PAGES_READ_AHEAD){
        $this->NUMBER_PAGES_READ_AHEAD = $NUMBER_PAGES_READ_AHEAD;
    }

    function setNUMBER_READ_AHEAD_EVICTED($NUMBER_READ_AHEAD_EVICTED){
        $this->NUMBER_READ_AHEAD_EVICTED = $NUMBER_READ_AHEAD_EVICTED;
    }

    function setREAD_AHEAD_RATE($READ_AHEAD_RATE){
        $this->READ_AHEAD_RATE = $READ_AHEAD_RATE;
    }

    function setREAD_AHEAD_EVICTED_RATE($READ_AHEAD_EVICTED_RATE){
        $this->READ_AHEAD_EVICTED_RATE = $READ_AHEAD_EVICTED_RATE;
    }

    function setLRU_IO_TOTAL($LRU_IO_TOTAL){
        $this->LRU_IO_TOTAL = $LRU_IO_TOTAL;
    }

    function setLRU_IO_CURRENT($LRU_IO_CURRENT){
        $this->LRU_IO_CURRENT = $LRU_IO_CURRENT;
    }

    function setUNCOMPRESS_TOTAL($UNCOMPRESS_TOTAL){
        $this->UNCOMPRESS_TOTAL = $UNCOMPRESS_TOTAL;
    }

    function setUNCOMPRESS_CURRENT($UNCOMPRESS_CURRENT){
        $this->UNCOMPRESS_CURRENT = $UNCOMPRESS_CURRENT;
    }

}