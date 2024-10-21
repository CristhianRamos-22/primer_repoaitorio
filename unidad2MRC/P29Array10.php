<?php
 /*cbtis 89
 programa que sirve para saber si uno de los nombres sale en el array
 cristhian molina ramos 
 programaciòn T.M
 */
 $nombres = array("anna","leo","carlos","hanna","sebastian","samuel","jaqueline","jose");
 $nombre = "jaqueline";
 foreach ($nombres as $nom) {
 	if ($nom == $nombre){
 		echo "Este nombre està en el array.";
 	}
 } 
 ?>
 