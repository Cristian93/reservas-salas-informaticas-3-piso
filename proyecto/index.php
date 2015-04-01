<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <title></title>
    </head>
    <link rel="stylesheet" href="controller/css/index.css">
    <script src="controller/js/jquery-1.11.2.min.js"></script>
    <script src="controller/js/index.js"></script>
    <body>      
        
           
            
            
      
            
            <!-- El tipo de codificación de datos, enctype, se DEBE especificar como a continuación -->
          <form enctype="multipart/form-data" action="subir.php" method="POST">
    
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
   
    Cargar archivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar archivo" />
    
 
</form>
            
      
            
            
            
     
    </body>
</html>
