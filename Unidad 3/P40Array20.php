<?php
/*CBTIS 89
P40Array20.php
Programa que almacena por medio de un ciclo los nùmeros del 150 al 200 de la siguiente manera:
En el $Arreglo1 van los nùmeros pares, en el $Arreglo2 van lops numeros impares,en el $Arreglo3 va la suma de los numeros 
correspondiente al mismo ìndice
Cristhian molina ramos 
3ªA Proramaciòn Matutino*/
$Arreglo1 = array(); 
$Arreglo2 = array(); 
$Arreglo3 = array(); 
for ($i = 150; $i <= 201; $i++) {
    if ($i % 2 == 0) {
        $Arreglo1[] = $i;
    } else {
        $Arreglo2[] = $i;
    }
}
$longitud = max(count($Arreglo1), count($Arreglo2));

for ($i = 0; $i < $longitud; $i++) {
    $Arreglo3[] = $Arreglo1[$i] + $Arreglo2[$i];
}
echo"<br>";
echo "CBTIS 89";
echo "<br>";

echo "Arreglo1"," "," ","Arreglo2"," "," ","Arreglo3";
echo "<br>";

$numeros =max(count($Arreglo1), count($Arreglo2), count($Arreglo3));

for ($i = 0; $i < $numeros; $i++) {
   
    echo $Arreglo1[$i]."--------".$Arreglo2[$i]."--------".$Arreglo3[$i]."<br>";
}
?>