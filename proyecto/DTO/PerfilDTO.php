<?php

class PerfilDTO{

    private $idperfil;
    private $nombreperfil;
    private $estadoperfil;

    function getIdperfil(){
       return $this->idperfil;
    }

    function getNombreperfil(){
       return $this->nombreperfil;
    }

    function getEstadoperfil(){
       return $this->estadoperfil;
    }

    function setIdperfil($idperfil){
        $this->idperfil = $idperfil;
    }

    function setNombreperfil($nombreperfil){
        $this->nombreperfil = $nombreperfil;
    }

    function setEstadoperfil($estadoperfil){
        $this->estadoperfil = $estadoperfil;
    }

}