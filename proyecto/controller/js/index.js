
$(document).ready(function () {

});


function onLoad() {
     
    
   
        var formData = new FormData($(".formulario")[0]);
        var message = ""; 
        //hacemos la petición ajax  
        $.ajax({
            url: 'controller/php/upload.php',  
            type: 'POST',
            // Form data
            //datos del formulario
            data:formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
                
                     
            },
            //una vez finalizado correctamente
            success: function(data){
               
                
                
                
                    $("#subir").html(data);
                
            },
            //si ha ocurrido un error
            error: function(){
                
            }
        
        
    });
}
function Ongenerate(){
    
    
     $.ajax({
            url: 'controller/php/request.php',  
            type: 'POST',
            data:{
                tipo:"generar"
            },
            //mientras enviamos el archivo
            beforeSend: function(){
                
                     
            },
            //una vez finalizado correctamente
            success: function(data){
               
                
                
                
                    $("#generar").html(data);
                
            },
            //si ha ocurrido un error
            error: function(){
                
            }
        
        
    });
    
    
    
    
}

function generarDTO(){
   // alert ( getRadioButtonSelectedValue(  document.form2.radgroup2)   );
    
    $.ajax({
        url: "funciones.php",
        dataType: "html",
        type: "POST",
        data: {
           tipo:"generarDto",
            val1: getRadioButtonSelectedValue(  document.form2.radgroup2)
             
        },
        beforeSend: function (xhr) {

        },
        success: function (data) {
           //        alert( data );
        
        },
        error: function (jqXHR, textStatus, errorThrown) {

        },
        complete: function (jqXHR, textStatus) {

        }
    });
    
}


function generarConexion(){
    alert ( getRadioButtonSelectedValue(  document.form2.radgroup3)   );
    
    $.ajax({
        url: "funciones.php",
        dataType: "html",
        type: "POST",
        data: {
           tipo:"generarConexion",
           val1: getRadioButtonSelectedValue(  document.form2.radgroup3)
             
        },
        beforeSend: function (xhr) {

        },
        success: function (data) {
                //   alert( data );
        
        },
        error: function (jqXHR, textStatus, errorThrown) {

        },
        complete: function (jqXHR, textStatus) {

        }
    });
    
}

function getRadioButtonSelectedValue(ctrl)
{
    for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) return ctrl[i].value;
}



function prueba(){
   
    $.ajax({
        url: "funciones.php",
        dataType: "html",
        type: "POST",
        data: {
           tipo:"prueba"
             
        },
        beforeSend: function (xhr) {

        },
        success: function (data) {
               alert (data)  ;      
        },
        error: function (jqXHR, textStatus, errorThrown) {

        },
        complete: function (jqXHR, textStatus) {

        }
    });
    
}
















