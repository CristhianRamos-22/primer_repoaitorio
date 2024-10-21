<?php
/* CBTIS 89
PROGRAMA QUE CALCULA CUANTO CUESTA EL KILO DE FRUTA 
CRISTHIAN MOLINA RAMOS
3ªA PROGRAMACIÒN T.M.
*/
$kilo=array("manzana"=>"$25","mango"=>"$40","limon"=>"$35","naranja"=>"$20");

echo"**Fruteria del sur **","<br>","<br>";
foreach($kilo as $fruta=>$precio)
	{echo " el kilo de ". $fruta . " cuesta " .$precio;
echo "<br>","<br>";
}
?>