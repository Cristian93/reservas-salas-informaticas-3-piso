<?php

class CountryDTO{

    private $id;
    private $name;
    private $state;

    function getId(){
       return $this->id;
    }

    function getName(){
       return $this->name;
    }

    function getState(){
       return $this->state;
    }

    function setId($id){
        $this->id = $id;
    }

    function setName($name){
        $this->name = $name;
    }

    function setState($state){
        $this->state = $state;
    }

}