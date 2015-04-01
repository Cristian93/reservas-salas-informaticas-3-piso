<?php

class INNODB_CMP_PER_INDEX_RESETDTO{

    private $database_name;
    private $table_name;
    private $index_name;
    private $compress_ops;
    private $compress_ops_ok;
    private $compress_time;
    private $uncompress_ops;
    private $uncompress_time;

    function getDatabase_name(){
       return $this->database_name;
    }

    function getTable_name(){
       return $this->table_name;
    }

    function getIndex_name(){
       return $this->index_name;
    }

    function getCompress_ops(){
       return $this->compress_ops;
    }

    function getCompress_ops_ok(){
       return $this->compress_ops_ok;
    }

    function getCompress_time(){
       return $this->compress_time;
    }

    function getUncompress_ops(){
       return $this->uncompress_ops;
    }

    function getUncompress_time(){
       return $this->uncompress_time;
    }

    function setDatabase_name($database_name){
        $this->database_name = $database_name;
    }

    function setTable_name($table_name){
        $this->table_name = $table_name;
    }

    function setIndex_name($index_name){
        $this->index_name = $index_name;
    }

    function setCompress_ops($compress_ops){
        $this->compress_ops = $compress_ops;
    }

    function setCompress_ops_ok($compress_ops_ok){
        $this->compress_ops_ok = $compress_ops_ok;
    }

    function setCompress_time($compress_time){
        $this->compress_time = $compress_time;
    }

    function setUncompress_ops($uncompress_ops){
        $this->uncompress_ops = $uncompress_ops;
    }

    function setUncompress_time($uncompress_time){
        $this->uncompress_time = $uncompress_time;
    }

}