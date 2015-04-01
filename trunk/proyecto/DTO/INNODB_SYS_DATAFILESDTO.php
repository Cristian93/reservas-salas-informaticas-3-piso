<?php

class INNODB_SYS_DATAFILESDTO{

    private $SPACE;
    private $PATH;

    function getSPACE(){
       return $this->SPACE;
    }

    function getPATH(){
       return $this->PATH;
    }

    function setSPACE($SPACE){
        $this->SPACE = $SPACE;
    }

    function setPATH($PATH){
        $this->PATH = $PATH;
    }

}