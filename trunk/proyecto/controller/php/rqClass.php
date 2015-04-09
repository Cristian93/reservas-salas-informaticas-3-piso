<?php
//Progrmacion directa
class rqClass {

   

function onGenerate(){
     $fichero_texto = fopen ("../files/SCRIPTAPL.txt", "r");
   //obtenemos de una sola vez todo el contenido del fichero
   //OJO! Debido a filesize(), sólo funcionará con archivos de texto
   $contenido_fichero = fread($fichero_texto, filesize("../files/SCRIPTAPL.txt"));
   $v=file("../files/SCRIPTAPL.txt");
   $cantidad = count($v);
   $ot=0;
   $aux=0;
   $aux2="";
   $var=$v;
   $nombretablas;
   $nombreatributos;
   $atributos;
   $atributoauxiliar;
   $conatributos=0;
   $cona=0;
   $tipo="";
   $concomillas=0;
for($i=0;$i< $cantidad;$i++){
   $con=0;
  if (strpos($v[$i],'CREATE TABLE') !== false) {
  $var="";
     for($j=0;$j<strlen($v[$i]);$j++){
        if($v[$i][$j]==="`"){
           
            $con++;
        }
         if($con>=3 &&$v[$i][$j]!='`'&& $v[$i][$j]!="(" ){
             $var=$var.$v[$i][$j];
        
         }
    }
       
   $nombretablas[$ot]=trim($var);
   $ot=$ot+1;
  $aux=$i+1;
  $aux2="";
  
  
  while(strpos($v[$aux],'PRIMARY KEY') === false) {
     $concomillas=0;
     $atributoauxiliar="";
     
       for($k=0;$k<strlen($v[$aux]);$k++){
      // $aux2=$aux2.$v[$aux];
       //echo $v[$aux][$k]." ".$cona."<br>";
           if($v[$aux][$k]==="`"){
               $concomillas++;
               
           }
           if($concomillas===1 && $v[$aux][$k]!=="`"){
             
               $atributoauxiliar=$atributoauxiliar.$v[$aux][$k];
           }
           if($concomillas===2){
               if($v[$aux][$k]==="I"){
                   $tipo="int";
                   
               }
               if($v[$aux][$k]==="V"){
                   $tipo="String";
                   
               }
               if($v[$aux][$k]==="D"){
                   $tipo="float";
                   
               }
               
           }
       
      
      
       }
       
       $atributo[$conatributos][0]=$cona;
       $atributo[$conatributos][1]=$atributoauxiliar;
       $atributo[$conatributos][2]=$tipo;
       
       $conatributos++;
       $aux++;
   }
   $cona++;
    }
    
     
    
   
}


/*for($j=0;$j<  count($nombreatributos);$j++){
    
    echo $nombreatributos[$j]."<br>";
   
    
}*/


for($j=0;$j<  count($nombretablas);$j++){
   
  
    $ar=fopen("../files/DTOs/".$nombretablas[$j]."DTO.php","a") or
    die("Problemas en la creacion");
    
    fputs($ar,"<"."?"."php\n class ".$nombretablas[$j]."DTO{\n");
    for($i=0;$i<$conatributos;$i++){
    
    
        if($atributo[$i][0]===$j){
        fputs($ar,"private $".$atributo[$i][1].";\n");
        }
    
}
  for($i=0;$i<$conatributos;$i++){
    
    
        if($atributo[$i][0]===$j){
        fputs($ar,"\nfunction get".$atributo[$i][1]."(){\n return"." $"."this->".$atributo[$i][1].";\n}\n");
        fputs($ar,"\nfunction set".$atributo[$i][1]."($".$atributo[$i][1]."){\n $"."this->".$atributo[$i][1]."= $".$atributo[$i][1].";\n}\n");
        }
    
}
  fputs($ar,"\n}");
 
  fclose($ar);
}




for($j=0;$j<  count($nombretablas);$j++){
   
  
    $ar=fopen("../files/DAOs/".$nombretablas[$j]."DAO.php","a") or
    die("Problemas en la creacion");
    
    fputs($ar,"<"."?"."php\n class ".$nombretablas[$j]."DAO{\n");
    for($i=0;$i<$conatributos;$i++){
    
    
        if($atributo[$i][0]===$j){
        fputs($ar,"private $".$atributo[$i][1].";\n");
        }
    
}
  for($i=0;$i<$conatributos;$i++){
    
    
        if($atributo[$i][0]===$j){
        fputs($ar,"\nfunction get".$atributo[$i][1]."(){\n return"." $"."this->".$atributo[$i][1].";\n}\n");
        fputs($ar,"\nfunction set".$atributo[$i][1]."($".$atributo[$i][1]."){\n $"."this->".$atributo[$i][1]."= $".$atributo[$i][1].";\n}\n");
        }
    
}
  fputs($ar,"\n}");
 
  fclose($ar);
}
   

}
}