<?php

class conexionprueba {

    private $DBH;
    private $sentencia;

    function setMysql($host, $dbname, $user, $pass) {

        $this->DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    }

    function setSQLite($database) {
        $this->DBH = new PDO("sqlite:my/database/path/" . $database . ".db");
    }

    function getMysql() {

        return $this->DBH;
    }

    function getSQLite() {

        return $this->DBH;
    }

    function close() {

        $this->DBH = null;
    }

    function execute() {

        $f = $this->DBH->prepare($this->sentencia);
        $f->execute();
        $result = $f->fetchAll();
        return $result;
    }

    function getStatement() {
        return $this->sentencia;
    }

    function setStatement($sentencia) {
        $this->sentencia = $sentencia;
    }

}
