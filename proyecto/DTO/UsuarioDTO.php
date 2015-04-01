<?php

class UsuarioDTO{

    private $idusuario;
    private $correoelectronico;
    private $nombre;
    private $apellido;
    private $contrasena;
    private $fecharegistrousuario;
    private $estadousuario;
    private $programa_idprograma;
    private $perfil_idperfil;

    function getIdusuario(){
       return $this->idusuario;
    }

    function getCorreoelectronico(){
       return $this->correoelectronico;
    }

    function getNombre(){
       return $this->nombre;
    }

    function getApellido(){
       return $this->apellido;
    }

    function getContrasena(){
       return $this->contrasena;
    }

    function getFecharegistrousuario(){
       return $this->fecharegistrousuario;
    }

    function getEstadousuario(){
       return $this->estadousuario;
    }

    function getPrograma_idprograma(){
       return $this->programa_idprograma;
    }

    function getPerfil_idperfil(){
       return $this->perfil_idperfil;
    }

    function setIdusuario($idusuario){
        $this->idusuario = $idusuario;
    }

    function setCorreoelectronico($correoelectronico){
        $this->correoelectronico = $correoelectronico;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellido($apellido){
        $this->apellido = $apellido;
    }

    function setContrasena($contrasena){
        $this->contrasena = $contrasena;
    }

    function setFecharegistrousuario($fecharegistrousuario){
        $this->fecharegistrousuario = $fecharegistrousuario;
    }

    function setEstadousuario($estadousuario){
        $this->estadousuario = $estadousuario;
    }

    function setPrograma_idprograma($programa_idprograma){
        $this->programa_idprograma = $programa_idprograma;
    }

    function setPerfil_idperfil($perfil_idperfil){
        $this->perfil_idperfil = $perfil_idperfil;
    }

}