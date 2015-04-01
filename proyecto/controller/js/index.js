$(document).ready(function () {

});


function onLoad() {
 
    $.ajax({
   
    url:"subir.php",
    type:"POST",
    dataType:"html",
    data:{
        tipo:"submit"
        
         
    },
    beforeSend: function (xhr) {
        
    },
    success: function (data) {
            $("#dive").html(data);
    },
    
    error: function (jqXHR, textStatus, errorThrown) {
              $("#dive").html("gono");
    }
    
    
    
    
});
}


function mostrarTablas(){
    alert ( getRadioButtonSelectedValue(  document.form2.radgroup2)   );
    
    $.ajax({
        url: "funciones.php",
        dataType: "html",
        type: "POST",
        data: {
           tipo:"mostrartablas",
            val1: getRadioButtonSelectedValue(  document.form2.radgroup2)
             
        },
        beforeSend: function (xhr) {

        },
        success: function (data) {
                      alert( data );
        
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



















