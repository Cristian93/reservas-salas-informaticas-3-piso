<?php

class SoftwareDTO{

    private $idsoftware;
    private $nombresoftware;
    private $estadosoftware;

    function getIdsoftware(){
       return $this->idsoftware;
    }

    function getNombresoftware(){
       return $this->nombresoftware;
    }

    function getEstadosoftware(){
       return $this->estadosoftware;
    }

    function setIdsoftware($idsoftware){
        $this->idsoftware = $idsoftware;
    }

    function setNombresoftware($nombresoftware){
        $this->nombresoftware = $nombresoftware;
    }

    function setEstadosoftware($estadosoftware){
        $this->estadosoftware = $estadosoftware;
    }

}