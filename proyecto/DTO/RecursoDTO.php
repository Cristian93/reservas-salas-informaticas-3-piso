<?php

class RecursoDTO{

    private $idrecurso;
    private $nombrerecurso;
    private $estadorecurso;

    function getIdrecurso(){
       return $this->idrecurso;
    }

    function getNombrerecurso(){
       return $this->nombrerecurso;
    }

    function getEstadorecurso(){
       return $this->estadorecurso;
    }

    function setIdrecurso($idrecurso){
        $this->idrecurso = $idrecurso;
    }

    function setNombrerecurso($nombrerecurso){
        $this->nombrerecurso = $nombrerecurso;
    }

    function setEstadorecurso($estadorecurso){
        $this->estadorecurso = $estadorecurso;
    }

}