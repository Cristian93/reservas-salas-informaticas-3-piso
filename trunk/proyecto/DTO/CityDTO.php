<?php

class CityDTO{

    private $id;
    private $country_id;
    private $name;
    private $code;
    private $state;

    function getId(){
       return $this->id;
    }

    function getCountry_id(){
       return $this->country_id;
    }

    function getName(){
       return $this->name;
    }

    function getCode(){
       return $this->code;
    }

    function getState(){
       return $this->state;
    }

    function setId($id){
        $this->id = $id;
    }

    function setCountry_id($country_id){
        $this->country_id = $country_id;
    }

    function setName($name){
        $this->name = $name;
    }

    function setCode($code){
        $this->code = $code;
    }

    function setState($state){
        $this->state = $state;
    }

}