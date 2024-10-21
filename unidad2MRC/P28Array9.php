 <?php
 /*cbtis 89
 programa que sirve paracrear un array asociativo y mostrarlo mediante un var dump
 cristhian molina ramos 
 programaciòn T.M
 */
 $ropa = array("playeras"=>"100","camisas"=>"250","pantalones de mezclilla"=>"300","bermudas"=>"200");
 foreach($ropa as $prenda=>$precio){
 	echo "la prenda " . $prenda ."tiene un precio de : " . $precio ;
 	echo"<br>";
 }
 var_dump($ropa);
?>