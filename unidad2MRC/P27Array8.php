 <?php
 /*cbtis 89
 programa que muestra una lista del 1 al 100
 cristhian molina ramos 
 programaciòn T.M
 */
// se guardan los numeros del 1 al 100 en el arreglo
 $numeros = array();
 for ($j=1;$j<=100;$j++)
 { $numeros[]=$j;}
 //ciclo que recorre todo el arreglo 
foreach ($numeros as $valor)
	{ // se determina si el numero es par
		if ($valor % 2 == 0)
			{//se imprime el numero 
				echo $valor . " ";}
			}
?>

 	