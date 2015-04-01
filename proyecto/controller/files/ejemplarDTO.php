<?php
 class ejemplarDTO{
private $id;
private $numeroejemplar;
private $estado;
private $pelicula_id;

function getid(){
 return $this->id;
}

function setid($id){
 $this->id= $id;
}

function getnumeroejemplar(){
 return $this->numeroejemplar;
}

function setnumeroejemplar($numeroejemplar){
 $this->numeroejemplar= $numeroejemplar;
}

function getestado(){
 return $this->estado;
}

function setestado($estado){
 $this->estado= $estado;
}

function getpelicula_id(){
 return $this->pelicula_id;
}

function setpelicula_id($pelicula_id){
 $this->pelicula_id= $pelicula_id;
}

}