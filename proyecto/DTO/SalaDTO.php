<?php

class SalaDTO{

    private $idsala;
    private $nombresala;
    private $numerocomputadores;
    private $estadosala;

    function getIdsala(){
       return $this->idsala;
    }

    function getNombresala(){
       return $this->nombresala;
    }

    function getNumerocomputadores(){
       return $this->numerocomputadores;
    }

    function getEstadosala(){
       return $this->estadosala;
    }

    function setIdsala($idsala){
        $this->idsala = $idsala;
    }

    function setNombresala($nombresala){
        $this->nombresala = $nombresala;
    }

    function setNumerocomputadores($numerocomputadores){
        $this->numerocomputadores = $numerocomputadores;
    }

    function setEstadosala($estadosala){
        $this->estadosala = $estadosala;
    }

}