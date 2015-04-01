<?php

class INNODB_CMPMEMDTO{

    private $page_size;
    private $buffer_pool_instance;
    private $pages_used;
    private $pages_free;
    private $relocation_ops;
    private $relocation_time;

    function getPage_size(){
       return $this->page_size;
    }

    function getBuffer_pool_instance(){
       return $this->buffer_pool_instance;
    }

    function getPages_used(){
       return $this->pages_used;
    }

    function getPages_free(){
       return $this->pages_free;
    }

    function getRelocation_ops(){
       return $this->relocation_ops;
    }

    function getRelocation_time(){
       return $this->relocation_time;
    }

    function setPage_size($page_size){
        $this->page_size = $page_size;
    }

    function setBuffer_pool_instance($buffer_pool_instance){
        $this->buffer_pool_instance = $buffer_pool_instance;
    }

    function setPages_used($pages_used){
        $this->pages_used = $pages_used;
    }

    function setPages_free($pages_free){
        $this->pages_free = $pages_free;
    }

    function setRelocation_ops($relocation_ops){
        $this->relocation_ops = $relocation_ops;
    }

    function setRelocation_time($relocation_time){
        $this->relocation_time = $relocation_time;
    }

}