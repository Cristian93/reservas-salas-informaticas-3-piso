<?php

class Software_has_reservaDTO{

    private $software_idsoftware;
    private $reserva_idreserva;

    function getSoftware_idsoftware(){
       return $this->software_idsoftware;
    }

    function getReserva_idreserva(){
       return $this->reserva_idreserva;
    }

    function setSoftware_idsoftware($software_idsoftware){
        $this->software_idsoftware = $software_idsoftware;
    }

    function setReserva_idreserva($reserva_idreserva){
        $this->reserva_idreserva = $reserva_idreserva;
    }

}