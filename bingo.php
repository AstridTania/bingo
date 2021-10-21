
<?php
function creadorCartones(){
    $carton=array();
	$i=0;
	while (count($carton)<15){
		$bola=rand(1,60);	
		if (!(in_array($bola,$carton)))
		$carton[$i++]=$bola;
	}
	return $carton;
}

function existeNumero($bola,$carton,&$coincidencia){
	if (in_array($bola,$carton)){
			array_push($coincidencia,$bola);
		}
}
	
	
	$j1c1= creadorCartones();
	$j1c2= creadorCartones();
	$j1c3= creadorCartones();
	
	$j2c1= creadorCartones();
	$j2c2= creadorCartones();
	$j2c3= creadorCartones();
	
	$j3c1= creadorCartones();
	$j3c2= creadorCartones();
	$j3c3= creadorCartones();

	$j4c1= creadorCartones();
	$j4c2= creadorCartones();
	$j4c3= creadorCartones();


   $bombo = array();
  
	$j1coin1=array();	
	$j1coin2=array();
	$j1coin3=array();

	$j2coin1=array();	
	$j2coin2=array();
	$j2coin3=array();

	$j3coin1=array();	
	$j3coin2=array();
	$j3coin3=array();

	$j4coin1=array();	
	$j4coin2=array();
	$j4coin3=array();

	
 while (count($j1coin1)<15&&count($j1coin2)<15&&count($j1coin3)<15&&count($j2coin1)<15&&count($j2coin2)<15&&count($j2coin3)<15&&count($j3coin1)<15&&count($j3coin2)<15&&count($j3coin3)<15&&count($j4coin1)<15&&count($j4coin2)<15&&count($j4coin3)<15){
	 $bolas=rand(1,60);
	 if (!(in_array($bolas,$bombo))){
		array_push($bombo,$bolas);
		echo '<img src="numeros\\'.$bolas.'.PNG" alt=""/>';
		existeNumero($bolas,$j1c1,$j1coin1);
		existeNumero($bolas,$j1c2,$j1coin2);
		existeNumero($bolas,$j1c3,$j1coin3);

		
		existeNumero($bolas,$j3c1,$j3coin1);
		existeNumero($bolas,$j3c2,$j3coin2);
		existeNumero($bolas,$j3c3,$j3coin3);

		
		existeNumero($bolas,$j2c1,$j2coin1);
		existeNumero($bolas,$j2c2,$j2coin2);
		existeNumero($bolas,$j2c3,$j2coin3);
		
		
		
		existeNumero($bolas,$j4c1,$j4coin1);
		existeNumero($bolas,$j4c2,$j4coin2);
		existeNumero($bolas,$j4c3,$j4coin3);
		
	 }
	
	 
 }
  
 if(count($j1coin1)==15||count($j1coin2)==15||count($j1coin3)==15){
	 echo " <br/> ha ganado el jugador 1 ";
	 if(count($j1coin1)==15){
		echo "con el carton 1"; 
		 
	 }elseif(count($j1coin2)==15){
		 echo "con el carton 2";
		 
	 }else{
		 echo "con el carton 3";
		
	 }
 }elseif(count($j2coin1)==15||count($j2coin2)==15||count($j2coin3)==15){
 	 echo " <br/> ha ganado el jugador 2 ";
	 if(count($j2coin1)==15){
		 echo "con el carton 1";
		 
	 }elseif(count($j2coin2)==15){
		 echo "con el carton 2";
		
	 }else {
		 echo "con el carton 3";
		 
	 }
 }elseif(count($j3coin1)==15||count($j3coin2)==15||count($j3coin3)==15){
	 echo " <br/> ha ganado el jugador 3 ";
	 if(count($j3coin1)==15){
		 echo "con el carton 1";
		
	 }elseif(count($j3coin2)==15){
		 echo "con el carton 2";
		 
	 }else{
		echo "con el carton 3";
		
	 }
 }else{
     echo " <br/> ha ganado el jugador 4 ";
	if(count($j4coin1)==15){
		 echo "con el carton 1";
		
	 }elseif(count($j4coin2)==15){
		 echo "con el carton 2";
		 
	 }else{
		 echo "con el carton 3";
		 	
	 }
 }
	
	?>
