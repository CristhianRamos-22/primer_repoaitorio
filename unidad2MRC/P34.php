<?php
 /*cbtis 89
 programa que convierte los datos de un arreglo en una cadena de texto, y de forma contraria es decir convierte una cadenade texto de elementos dentro de un arreglo.
 cristhian molina ramos 
 programaciòn T.M
 */

 //almacena datos de un arreglo
 $arraydatos=["karina","rosales","orozco"];
 
 //convierte un array en una cadena de texto
 $string = implode(" ",$arraydatos);
 echo "cadena de texto <br>";
 echo $string;
 echo"<br>","<br>"; 

 //cadena de texto a separar
 $cadena = "tercero de programaciòn matutino";

  //convierte una cadena de texto en un array
 $array = explode(" ", $cadena);

$longitud = count($array);
echo "<br>";
echo "arreglo con datos de tipo string <br>";
//imprime los elemntos del arreglo
for($i=0; $i<$longitud; $i++)
	{ // se obtiene el valor de cada elemnto
		echo $array[$i];
		echo "<br>";
	}
?>