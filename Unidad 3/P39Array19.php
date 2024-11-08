<?php
/* CBTIS 89
Programa que almacena infromacion de 6 personas y dependiendo de su eada los contabiliza en diversos arreglos de acuerdo las siguientes condiciones:
si la persona es menor de 18 años se debe colocar un 1 en el arreglo $Grupo1 y en los otros  colocar un 0.
si la persona tiene entre 18 y 49 años de debe colocar un 1 en el arreglo $Grupo2 y en los otros dos colocar un 0.
si la persona tiene 50 años o mas se debe colocar un 1 en el arreglo $Grupo3, y en los otros dos un 0.

cristhian molina ramos
3°A programaciónn Matutino*/

$Nombre =array("paco","nari","Lalo","Rosi","Paty","Beto");
$edad = array(17,30,71,38,12,58);
$Grupo1 = array();
$Grupo2 =array();
$Grupo3 = array();
 
for ($i= 0; $i<7; $i++) {
	if($edad[$i] < 18)
	 {$Grupo1[$i]=1;
     $Grupo2[$i]=0;
     $Grupo3[$i]=0;
}else if ($edad[$i] >= 18 && $edad[$i] <= 49) {
    $Grupo2[$i] = 1;
     $Grupo3[$i] =0;
     $Grupo1[$i]=0;
}else if ($edad[$i] >= 50){
	 $Grupo3[$i] = 1;
     $Grupo1[$i] =0;
     $Grupo2[$i]=0;

   }  


}
echo  "nombre". "   ". " edades " . "   ". "Grupo 1" . "   ". "Grupo 2". "   ". "Grupo 3";
echo "<br>";

for($j=0;$j<7;$j++){
	echo $Nombre[$j] . "---------------" . $edad[$j] . "-------" . $Grupo1[$j] . "--------" . $Grupo2[$j]. "-------" . $Grupo3[$j]. "<br>";
}
?>