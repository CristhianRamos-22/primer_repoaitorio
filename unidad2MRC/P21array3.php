<?php
/*CBTIS 89
programa que almacena todos los datos
cristhian molina ramos
programacion T.M.
*/

$arraynombres =array("Cristhian","Santiago", "Sebastian", "Hugo", "Andres", "Luis"  );

//se obtienen numeros de elemntos
$longitud =count($arraynombres);

//Recorre todos los elemntos 
for ($i=0; $i<$longitud; $i++)
	{//se obtiene el valor de cada elemnto.
		echo $arraynombres[$i];
		echo "<br>";}

	?>