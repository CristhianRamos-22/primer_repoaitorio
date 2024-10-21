<?php
/* CBTIS 89
PROGRAMA que almacena datos en un arreglo y despues los imprime
CRISTHIAN MOLINA RAMOS
3ªA PROGRAMACIÒN T.M.
*/
$estudiantes= array("cristhian"=>"Programacion CBTIS 89", "Jaqueline"=>"logistica CBTIS 130", "leonardo"=>"programacion CBTIS 89", "carlos"=>"logistica CBTIS 89");
echo " ** ESTUDIANTES DE CBTIS **", "<br>", "<br>";
foreach ($estudiantes as $alumno=>$carrera)
	{echo "EL ALUMNO ". $alumno . "esta en" . $carrera;
    echo "<br>", "<br>";}
?>