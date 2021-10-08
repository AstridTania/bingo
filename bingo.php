
<?php


<?php
    $carton=array();
	$i=0;
	while (count($carton)<15){
		$bola=rand(1,60);	
		if (!(in_array($bola,$carton)))
		$carton[$i++]=$bola;
	}
	var_dump($carton);
	
	

   $bombo = array();
   for($j = 0; $j<61; $j++){
	$bombo[($j)] = $j;
    }
    var_dump($bombo);
	
	//$bolas= array_rand($bombo,2);  coge un numero aleatorio
	
	
	
	$aciertos=15;
	
 //while($aciertos<15){
  
$coincidencias=array();	
	
 for($x=0;$x<$aciertos;$x++){
	 $bolas=array_rand($bombo,2);
	 if (in_array($bolas,$carton)){
		 array_push($coincidencias,$bolas);
		$aciertos=$aciertos+1;
		}
	 
	 
 }
 
var_dump ($coincidencias);







?>
