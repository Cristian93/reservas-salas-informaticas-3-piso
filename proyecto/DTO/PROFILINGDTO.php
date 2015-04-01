<?php

class PROFILINGDTO{

    private $QUERY_ID;
    private $SEQ;
    private $STATE;
    private $DURATION;
    private $CPU_USER;
    private $CPU_SYSTEM;
    private $CONTEXT_VOLUNTARY;
    private $CONTEXT_INVOLUNTARY;
    private $BLOCK_OPS_IN;
    private $BLOCK_OPS_OUT;
    private $MESSAGES_SENT;
    private $MESSAGES_RECEIVED;
    private $PAGE_FAULTS_MAJOR;
    private $PAGE_FAULTS_MINOR;
    private $SWAPS;
    private $SOURCE_FUNCTION;
    private $SOURCE_FILE;
    private $SOURCE_LINE;

    function getQUERY_ID(){
       return $this->QUERY_ID;
    }

    function getSEQ(){
       return $this->SEQ;
    }

    function getSTATE(){
       return $this->STATE;
    }

    function getDURATION(){
       return $this->DURATION;
    }

    function getCPU_USER(){
       return $this->CPU_USER;
    }

    function getCPU_SYSTEM(){
       return $this->CPU_SYSTEM;
    }

    function getCONTEXT_VOLUNTARY(){
       return $this->CONTEXT_VOLUNTARY;
    }

    function getCONTEXT_INVOLUNTARY(){
       return $this->CONTEXT_INVOLUNTARY;
    }

    function getBLOCK_OPS_IN(){
       return $this->BLOCK_OPS_IN;
    }

    function getBLOCK_OPS_OUT(){
       return $this->BLOCK_OPS_OUT;
    }

    function getMESSAGES_SENT(){
       return $this->MESSAGES_SENT;
    }

    function getMESSAGES_RECEIVED(){
       return $this->MESSAGES_RECEIVED;
    }

    function getPAGE_FAULTS_MAJOR(){
       return $this->PAGE_FAULTS_MAJOR;
    }

    function getPAGE_FAULTS_MINOR(){
       return $this->PAGE_FAULTS_MINOR;
    }

    function getSWAPS(){
       return $this->SWAPS;
    }

    function getSOURCE_FUNCTION(){
       return $this->SOURCE_FUNCTION;
    }

    function getSOURCE_FILE(){
       return $this->SOURCE_FILE;
    }

    function getSOURCE_LINE(){
       return $this->SOURCE_LINE;
    }

    function setQUERY_ID($QUERY_ID){
        $this->QUERY_ID = $QUERY_ID;
    }

    function setSEQ($SEQ){
        $this->SEQ = $SEQ;
    }

    function setSTATE($STATE){
        $this->STATE = $STATE;
    }

    function setDURATION($DURATION){
        $this->DURATION = $DURATION;
    }

    function setCPU_USER($CPU_USER){
        $this->CPU_USER = $CPU_USER;
    }

    function setCPU_SYSTEM($CPU_SYSTEM){
        $this->CPU_SYSTEM = $CPU_SYSTEM;
    }

    function setCONTEXT_VOLUNTARY($CONTEXT_VOLUNTARY){
        $this->CONTEXT_VOLUNTARY = $CONTEXT_VOLUNTARY;
    }

    function setCONTEXT_INVOLUNTARY($CONTEXT_INVOLUNTARY){
        $this->CONTEXT_INVOLUNTARY = $CONTEXT_INVOLUNTARY;
    }

    function setBLOCK_OPS_IN($BLOCK_OPS_IN){
        $this->BLOCK_OPS_IN = $BLOCK_OPS_IN;
    }

    function setBLOCK_OPS_OUT($BLOCK_OPS_OUT){
        $this->BLOCK_OPS_OUT = $BLOCK_OPS_OUT;
    }

    function setMESSAGES_SENT($MESSAGES_SENT){
        $this->MESSAGES_SENT = $MESSAGES_SENT;
    }

    function setMESSAGES_RECEIVED($MESSAGES_RECEIVED){
        $this->MESSAGES_RECEIVED = $MESSAGES_RECEIVED;
    }

    function setPAGE_FAULTS_MAJOR($PAGE_FAULTS_MAJOR){
        $this->PAGE_FAULTS_MAJOR = $PAGE_FAULTS_MAJOR;
    }

    function setPAGE_FAULTS_MINOR($PAGE_FAULTS_MINOR){
        $this->PAGE_FAULTS_MINOR = $PAGE_FAULTS_MINOR;
    }

    function setSWAPS($SWAPS){
        $this->SWAPS = $SWAPS;
    }

    function setSOURCE_FUNCTION($SOURCE_FUNCTION){
        $this->SOURCE_FUNCTION = $SOURCE_FUNCTION;
    }

    function setSOURCE_FILE($SOURCE_FILE){
        $this->SOURCE_FILE = $SOURCE_FILE;
    }

    function setSOURCE_LINE($SOURCE_LINE){
        $this->SOURCE_LINE = $SOURCE_LINE;
    }

}