<?php
 /*cbtis 89
 programa que sirve para sumar,resta, multi y divi 
 cristhian molina ramos 
 programaciòn T.M
 */
 //alamena datos en un arreglo
$array1=[1,3,5,7,15];
$array2=[2,4,6,10,14];
$arraysuma =array();
$arrayresta =array();
$arraymulti =array();
$arraydivi =array();

$longitud = count($array1);

for($i=0; $i<$longitud; $i++)
{$arraysuma[$i] =$array1[$i]+$array2[$i];	
$arrayresta[$i] =$array1[$i]-$array2[$i];	
$arraymulti[$i] =$array1[$i]*$array2[$i];	
$arraydivi[$i] =$array1[$i]/$array2[$i];	
}


echo " suma entre arreglos <br>";
for($i=0; $i<$longitud; $i++)
{echo $array1[$i]." + ".$array2[$i]." = ". $arraysuma[$i];
echo "<br>";
}
echo "<br>";

echo " resta entre arreglos <br>";
for($i=0; $i<$longitud; $i++)
{echo $array1[$i]." - ".$array2[$i]." = ". $arrayresta[$i];
echo "<br>";
}
echo "<br>";


echo "<br>";echo " multi entre arreglos <br>";
for($i=0; $i<$longitud; $i++)
{echo $array1[$i]." *".$array2[$i]." = ". $arraymulti[$i];
echo "<br>";
}

echo "<br>";echo " divi entre arreglos <br>";
for($i=0; $i<$longitud; $i++)
{echo $array1[$i]." / ".$array2[$i]." = ". $arraydivi[$i];
echo "<br>";
}
?>



