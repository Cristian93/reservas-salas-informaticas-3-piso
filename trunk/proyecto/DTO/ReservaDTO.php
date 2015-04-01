<?php

class ReservaDTO{

    private $idreserva;
    private $numeroestudiantes;
    private $asignatura;
    private $grupo;
    private $fechareserva;
    private $fecharegistroreserva;
    private $horareserva;
    private $estadoreserva;
    private $archivo;
    private $usuario_idusuario;
    private $sala_idsala;

    function getIdreserva(){
       return $this->idreserva;
    }

    function getNumeroestudiantes(){
       return $this->numeroestudiantes;
    }

    function getAsignatura(){
       return $this->asignatura;
    }

    function getGrupo(){
       return $this->grupo;
    }

    function getFechareserva(){
       return $this->fechareserva;
    }

    function getFecharegistroreserva(){
       return $this->fecharegistroreserva;
    }

    function getHorareserva(){
       return $this->horareserva;
    }

    function getEstadoreserva(){
       return $this->estadoreserva;
    }

    function getArchivo(){
       return $this->archivo;
    }

    function getUsuario_idusuario(){
       return $this->usuario_idusuario;
    }

    function getSala_idsala(){
       return $this->sala_idsala;
    }

    function setIdreserva($idreserva){
        $this->idreserva = $idreserva;
    }

    function setNumeroestudiantes($numeroestudiantes){
        $this->numeroestudiantes = $numeroestudiantes;
    }

    function setAsignatura($asignatura){
        $this->asignatura = $asignatura;
    }

    function setGrupo($grupo){
        $this->grupo = $grupo;
    }

    function setFechareserva($fechareserva){
        $this->fechareserva = $fechareserva;
    }

    function setFecharegistroreserva($fecharegistroreserva){
        $this->fecharegistroreserva = $fecharegistroreserva;
    }

    function setHorareserva($horareserva){
        $this->horareserva = $horareserva;
    }

    function setEstadoreserva($estadoreserva){
        $this->estadoreserva = $estadoreserva;
    }

    function setArchivo($archivo){
        $this->archivo = $archivo;
    }

    function setUsuario_idusuario($usuario_idusuario){
        $this->usuario_idusuario = $usuario_idusuario;
    }

    function setSala_idsala($sala_idsala){
        $this->sala_idsala = $sala_idsala;
    }

}