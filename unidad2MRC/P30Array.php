<?php
 /*cbtis 89
 programa que sirve para escojer una mascota
 cristhian molina ramos 
 programaciòn T.M
 */
 $array_numerico_indixado = array(1, "gato",2, "perro");

 foreach($array_numerico_indixado as $mascota){
 	echo  $mascota . " <br>";
 }
 array_push($array_numerico_indixado, 3, "caballo");

 foreach($array_numerico_indixado as $mascota){
 	echo $mascota . " <br>";
 }
?>