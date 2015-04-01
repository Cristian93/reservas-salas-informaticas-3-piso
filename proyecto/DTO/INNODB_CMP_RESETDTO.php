<?php

class INNODB_CMP_RESETDTO{

    private $page_size;
    private $compress_ops;
    private $compress_ops_ok;
    private $compress_time;
    private $uncompress_ops;
    private $uncompress_time;

    function getPage_size(){
       return $this->page_size;
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

    function setPage_size($page_size){
        $this->page_size = $page_size;
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