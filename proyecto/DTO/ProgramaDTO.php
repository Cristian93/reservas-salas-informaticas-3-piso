<?php

class ProgramaDTO{

    private $idprograma;
    private $nombreprograma;
    private $estadoprograma;

    function getIdprograma(){
       return $this->idprograma;
    }

    function getNombreprograma(){
       return $this->nombreprograma;
    }

    function getEstadoprograma(){
       return $this->estadoprograma;
    }

    function setIdprograma($idprograma){
        $this->idprograma = $idprograma;
    }

    function setNombreprograma($nombreprograma){
        $this->nombreprograma = $nombreprograma;
    }

    function setEstadoprograma($estadoprograma){
        $this->estadoprograma = $estadoprograma;
    }

}