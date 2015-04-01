<?php

class INNODB_LOCKSDTO{

    private $lock_id;
    private $lock_trx_id;
    private $lock_mode;
    private $lock_type;
    private $lock_table;
    private $lock_index;
    private $lock_space;
    private $lock_page;
    private $lock_rec;
    private $lock_data;

    function getLock_id(){
       return $this->lock_id;
    }

    function getLock_trx_id(){
       return $this->lock_trx_id;
    }

    function getLock_mode(){
       return $this->lock_mode;
    }

    function getLock_type(){
       return $this->lock_type;
    }

    function getLock_table(){
       return $this->lock_table;
    }

    function getLock_index(){
       return $this->lock_index;
    }

    function getLock_space(){
       return $this->lock_space;
    }

    function getLock_page(){
       return $this->lock_page;
    }

    function getLock_rec(){
       return $this->lock_rec;
    }

    function getLock_data(){
       return $this->lock_data;
    }

    function setLock_id($lock_id){
        $this->lock_id = $lock_id;
    }

    function setLock_trx_id($lock_trx_id){
        $this->lock_trx_id = $lock_trx_id;
    }

    function setLock_mode($lock_mode){
        $this->lock_mode = $lock_mode;
    }

    function setLock_type($lock_type){
        $this->lock_type = $lock_type;
    }

    function setLock_table($lock_table){
        $this->lock_table = $lock_table;
    }

    function setLock_index($lock_index){
        $this->lock_index = $lock_index;
    }

    function setLock_space($lock_space){
        $this->lock_space = $lock_space;
    }

    function setLock_page($lock_page){
        $this->lock_page = $lock_page;
    }

    function setLock_rec($lock_rec){
        $this->lock_rec = $lock_rec;
    }

    function setLock_data($lock_data){
        $this->lock_data = $lock_data;
    }

}