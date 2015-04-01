<?php

class Reserva_has_recursoDTO{

    private $reserva_idreserva;
    private $recurso_idrecurso;

    function getReserva_idreserva(){
       return $this->reserva_idreserva;
    }

    function getRecurso_idrecurso(){
       return $this->recurso_idrecurso;
    }

    function setReserva_idreserva($reserva_idreserva){
        $this->reserva_idreserva = $reserva_idreserva;
    }

    function setRecurso_idrecurso($recurso_idrecurso){
        $this->recurso_idrecurso = $recurso_idrecurso;
    }

}