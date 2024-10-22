<?php
/* CBTIS 89
PROGRAMA QUE CALCULA CUANTO CUESTA EL KILO DE VERDURA
CRISTHIAN MOLINA RAMOS
3ªA PROGRAMACIÒN T.M.
*/
$kilo=array("APIO"=>"$25","CEBOLLA"=>"$40","ZANAHORIA"=>"$35","TOMATE"=>"$20");

echo"**CARNICERIA ROCIO **","<br>","<br>";
foreach($kilo as $verdura=>$precio)
	{echo " el kilo de ". $verdura. " cuesta " .$precio;
echo "<br>","<br>";
}
$array2=array(25,40,35,20);
$res=array();
for($i=0;$i<count($array2); $i++){
$res[$i]=$array2[$i] *0.10;
}
for($i=0;$i<count($res); $i++){
echo $res[$i];}
?>