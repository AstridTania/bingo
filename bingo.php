
<?php

$carton1=array();
$aciertos=0;

for ($i=0;$i<=14;$i++){
	
  $numeros= rand(1,60);
  
  if(!in_array($numeros,$carton1)){
  array_push($carton1,$numeros);
  }
  
}

 for ($i=0; $i <count($carton1); $i++) { 
        echo $carton1[$i]," ";
    }


$bombo=array();

for ($i=0;$i<=14;$i++){
	
  $bola= rand(1,60);
  array_push($bolas,$bola);
}

for ($i=0; $i <count($bolas); $i++) { 
        echo "  ".$bolas[$i],"  ";
    }


$coincidencias = array_intersect($carton1, $bolas);

foreach($coincidencias as $value) {
    echo "  ". $value;
}







?>