<?php
/*CBTIS 89
programa que almacena informacion sobre que posicion jugara cada persona 
cristhian molina ramos
programacion T.M.
*/

$equipo =array("portero"=>"Julio","defensa"=>"Diego","medio"=>"Jair","delantero"=>"Rafa");
echo "**Seleccion nacional **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
	{echo " el jugador ". $jugador ."es el". $posicion;
echo "<br>","<br>";
}
