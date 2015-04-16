<?php

class ConnectionClass {

    private $user;
    private $pass;
    private $dataBase;
    private $server;
    private $query;
    private $result;

    public function __construct() {
        $this->user = "root";
        $this->pass = "root";
        $this->dataBase = "dbingweb1";
        $this->server = "localhost";
        $this->open();
    }

    private function open() {
        //Conectarse a la base de datos mysql 
        $this->result = mysqli_connect($this->server, $this->user, $this->pass, $this->dataBase);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit( 0 );
        }
        mysqli_query($this->result, "SET NAMES UTF8");
    }

    public function close() {
        mysqli_close($this->result);
    }

    public function setSQL($sql) {
        //agregar sentencia sql
        $this->query = mysqli_query($this->result, $sql);
    }

    public function getSQL() {
        //devuleve la sentencia SQL
        return $this->query;
    }

    public function getRecordCurrent() {
        //retorna en arreglo el primer dato de una tabla o mas
        return mysqli_fetch_array( $this->query, MYSQLI_ASSOC );
    }

}
