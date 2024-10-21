<?php
 /*cbtis 89
 programa que sirve para ordenar nombres
 cristhian molina ramos 
 programaciòn T.M
 */
 $nombres =array("cossio","zavala","axel","sebastian","jaqueline","cristhian"); 

//orden ascendete 
sort($nombres);
echo "orden Ascendete:<p> ";
for($i=0;$i< count($nombres);$i++){
	echo$nombres[$i]. "<br>";
}
array_push($nombres, "pedro", "maria","Arron","paulina");
unset($nombres[1]);
unset($nombres[4]);
$nombres =array_values($nombres);
echo"<br>";
echo "orden descendente:<p> ";

for($i=O;$i< count($nombres);$i++){
	echo$nombres[$i]."<br>";}
	echo "<br>"
	echo "el numero de elementos actual es el arreglo es de:".
	count($nombres);
	?>
