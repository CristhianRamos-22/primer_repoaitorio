<?php
/*
CBTIS 89	
programa para que imprime los numeros positivos y negativos em arreglos distintos
Cristhian Molina 
programacion 3ºA T.M.
*/
$arraynumeros=array(-4,8,17,-11,-3,1,20,-30,21,50,-73,-7,-10,-8);
$arraypositivos=array( );
$arraynegativos=array( );
$sumapositivos=0;
$sumanegativos=0;


foreach($arraynumeros as $numero){
	if ($numero >= 0){
	$arraypositivos[] = $numero;
	$sumapositivos+=$numero;
} else {
	$arraynegativos[] = $numero;
	$sumanegativos+= $numero;

}
}
echo "POSITIVOS ";
echo "<br>";
echo implode(",",$arraypositivos) . "<br>";
 echo "NEGATIVOS";
 echo "<br>";
 echo implode(",", $arraynegativos) . "<br>";

 echo "La suma de los positivos es:" . $sumapositivos . "<br>";
 echo "La suma de los negativos es:" . $sumanegativos . "<br>";