<?php
 /*cbtis 89
 programa que sirve para ordenar nunmeros 
 cristhian molina ramos 
 programaciòn T.M
 */
 $arraynumerico = array("camisa","pantalon","cinturon","gorra","calcetines");

 //orden ascendente 
 sort($arraynumerico);
 var_export($arraynumerico);

 echo "<p>";

 //orden descentente 
 rsort($arraynumerico);
 var_export($arraynumerico);
?>