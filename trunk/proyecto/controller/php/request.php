<?php

require 'rqClass.php';

//se valida que boton se oprimio y se llaman las funciones de la clase rQClass
if (isset($_REQUEST["tipo"])) {
   
  
    if ($_REQUEST["tipo"]==="generar") {
        
        onGenerate();
    }
        
        
    
}
function onGenerate(){
    
    $rq=new rqClass();
    $rq->onGenerate();
    
}


