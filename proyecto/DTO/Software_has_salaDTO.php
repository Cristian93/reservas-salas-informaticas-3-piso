<?php

class Software_has_salaDTO{

    private $software_idsoftware;
    private $sala_idsala;

    function getSoftware_idsoftware(){
       return $this->software_idsoftware;
    }

    function getSala_idsala(){
       return $this->sala_idsala;
    }

    function setSoftware_idsoftware($software_idsoftware){
        $this->software_idsoftware = $software_idsoftware;
    }

    function setSala_idsala($sala_idsala){
        $this->sala_idsala = $sala_idsala;
    }

}