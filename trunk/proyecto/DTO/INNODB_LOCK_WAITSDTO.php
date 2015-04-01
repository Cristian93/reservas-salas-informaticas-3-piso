<?php

class INNODB_LOCK_WAITSDTO{

    private $requesting_trx_id;
    private $requested_lock_id;
    private $blocking_trx_id;
    private $blocking_lock_id;

    function getRequesting_trx_id(){
       return $this->requesting_trx_id;
    }

    function getRequested_lock_id(){
       return $this->requested_lock_id;
    }

    function getBlocking_trx_id(){
       return $this->blocking_trx_id;
    }

    function getBlocking_lock_id(){
       return $this->blocking_lock_id;
    }

    function setRequesting_trx_id($requesting_trx_id){
        $this->requesting_trx_id = $requesting_trx_id;
    }

    function setRequested_lock_id($requested_lock_id){
        $this->requested_lock_id = $requested_lock_id;
    }

    function setBlocking_trx_id($blocking_trx_id){
        $this->blocking_trx_id = $blocking_trx_id;
    }

    function setBlocking_lock_id($blocking_lock_id){
        $this->blocking_lock_id = $blocking_lock_id;
    }

}