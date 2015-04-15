<?php

 class conexion {

    private $DBH; 
    private $statement;


    function setMysql($host, $dbname, $user, $pass) { 
                   $this->DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    }
    
    function getMysql() {
                return $this->DBH;
    }
    function close() {

        $this->DBH = null;
    }

    function execute() {

        $f = $this->DBH->prepare($this->statement);
        $f->execute();
        $result = $f->fetchAll();
        return $result;
    }

    function getStatement() {
        return $this->statement;
    }

    function setStatement($statement) {
        $this->statement = $statement;
    }    
}