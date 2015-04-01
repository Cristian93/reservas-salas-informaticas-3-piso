<?php

class INNODB_TRXDTO{

    private $trx_id;
    private $trx_state;
    private $trx_started;
    private $trx_requested_lock_id;
    private $trx_wait_started;
    private $trx_weight;
    private $trx_mysql_thread_id;
    private $trx_query;
    private $trx_operation_state;
    private $trx_tables_in_use;
    private $trx_tables_locked;
    private $trx_lock_structs;
    private $trx_lock_memory_bytes;
    private $trx_rows_locked;
    private $trx_rows_modified;
    private $trx_concurrency_tickets;
    private $trx_isolation_level;
    private $trx_unique_checks;
    private $trx_foreign_key_checks;
    private $trx_last_foreign_key_error;
    private $trx_adaptive_hash_latched;
    private $trx_adaptive_hash_timeout;
    private $trx_is_read_only;
    private $trx_autocommit_non_locking;

    function getTrx_id(){
       return $this->trx_id;
    }

    function getTrx_state(){
       return $this->trx_state;
    }

    function getTrx_started(){
       return $this->trx_started;
    }

    function getTrx_requested_lock_id(){
       return $this->trx_requested_lock_id;
    }

    function getTrx_wait_started(){
       return $this->trx_wait_started;
    }

    function getTrx_weight(){
       return $this->trx_weight;
    }

    function getTrx_mysql_thread_id(){
       return $this->trx_mysql_thread_id;
    }

    function getTrx_query(){
       return $this->trx_query;
    }

    function getTrx_operation_state(){
       return $this->trx_operation_state;
    }

    function getTrx_tables_in_use(){
       return $this->trx_tables_in_use;
    }

    function getTrx_tables_locked(){
       return $this->trx_tables_locked;
    }

    function getTrx_lock_structs(){
       return $this->trx_lock_structs;
    }

    function getTrx_lock_memory_bytes(){
       return $this->trx_lock_memory_bytes;
    }

    function getTrx_rows_locked(){
       return $this->trx_rows_locked;
    }

    function getTrx_rows_modified(){
       return $this->trx_rows_modified;
    }

    function getTrx_concurrency_tickets(){
       return $this->trx_concurrency_tickets;
    }

    function getTrx_isolation_level(){
       return $this->trx_isolation_level;
    }

    function getTrx_unique_checks(){
       return $this->trx_unique_checks;
    }

    function getTrx_foreign_key_checks(){
       return $this->trx_foreign_key_checks;
    }

    function getTrx_last_foreign_key_error(){
       return $this->trx_last_foreign_key_error;
    }

    function getTrx_adaptive_hash_latched(){
       return $this->trx_adaptive_hash_latched;
    }

    function getTrx_adaptive_hash_timeout(){
       return $this->trx_adaptive_hash_timeout;
    }

    function getTrx_is_read_only(){
       return $this->trx_is_read_only;
    }

    function getTrx_autocommit_non_locking(){
       return $this->trx_autocommit_non_locking;
    }

    function setTrx_id($trx_id){
        $this->trx_id = $trx_id;
    }

    function setTrx_state($trx_state){
        $this->trx_state = $trx_state;
    }

    function setTrx_started($trx_started){
        $this->trx_started = $trx_started;
    }

    function setTrx_requested_lock_id($trx_requested_lock_id){
        $this->trx_requested_lock_id = $trx_requested_lock_id;
    }

    function setTrx_wait_started($trx_wait_started){
        $this->trx_wait_started = $trx_wait_started;
    }

    function setTrx_weight($trx_weight){
        $this->trx_weight = $trx_weight;
    }

    function setTrx_mysql_thread_id($trx_mysql_thread_id){
        $this->trx_mysql_thread_id = $trx_mysql_thread_id;
    }

    function setTrx_query($trx_query){
        $this->trx_query = $trx_query;
    }

    function setTrx_operation_state($trx_operation_state){
        $this->trx_operation_state = $trx_operation_state;
    }

    function setTrx_tables_in_use($trx_tables_in_use){
        $this->trx_tables_in_use = $trx_tables_in_use;
    }

    function setTrx_tables_locked($trx_tables_locked){
        $this->trx_tables_locked = $trx_tables_locked;
    }

    function setTrx_lock_structs($trx_lock_structs){
        $this->trx_lock_structs = $trx_lock_structs;
    }

    function setTrx_lock_memory_bytes($trx_lock_memory_bytes){
        $this->trx_lock_memory_bytes = $trx_lock_memory_bytes;
    }

    function setTrx_rows_locked($trx_rows_locked){
        $this->trx_rows_locked = $trx_rows_locked;
    }

    function setTrx_rows_modified($trx_rows_modified){
        $this->trx_rows_modified = $trx_rows_modified;
    }

    function setTrx_concurrency_tickets($trx_concurrency_tickets){
        $this->trx_concurrency_tickets = $trx_concurrency_tickets;
    }

    function setTrx_isolation_level($trx_isolation_level){
        $this->trx_isolation_level = $trx_isolation_level;
    }

    function setTrx_unique_checks($trx_unique_checks){
        $this->trx_unique_checks = $trx_unique_checks;
    }

    function setTrx_foreign_key_checks($trx_foreign_key_checks){
        $this->trx_foreign_key_checks = $trx_foreign_key_checks;
    }

    function setTrx_last_foreign_key_error($trx_last_foreign_key_error){
        $this->trx_last_foreign_key_error = $trx_last_foreign_key_error;
    }

    function setTrx_adaptive_hash_latched($trx_adaptive_hash_latched){
        $this->trx_adaptive_hash_latched = $trx_adaptive_hash_latched;
    }

    function setTrx_adaptive_hash_timeout($trx_adaptive_hash_timeout){
        $this->trx_adaptive_hash_timeout = $trx_adaptive_hash_timeout;
    }

    function setTrx_is_read_only($trx_is_read_only){
        $this->trx_is_read_only = $trx_is_read_only;
    }

    function setTrx_autocommit_non_locking($trx_autocommit_non_locking){
        $this->trx_autocommit_non_locking = $trx_autocommit_non_locking;
    }

}