<?php
 /*cbtis 89
 programa que sirve para ordenar nunmeros 
 cristhian molina ramos 
 programaciòn T.M
 */
 $arraynumerico = array(1,3,2,5,4,7,6);

 //orden ascendente 
 sort($arraynumerico);
 var_export($arraynumerico);

 echo "<p>";

 //orden descentente 
 rsort($arraynumerico);
 var_export($arraynumerico);
?>