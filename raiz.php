<?php
 //x2+2x−15=0
 function econtraRaiz($valor1,$valor2)
 {
	$resultado1 = $valor1*$valor1;
	$resultado2 = 2*$valor2;
	$total = $resultado2 + $resultado1;
	$total = $total - 15;
	echo $total;
 }
 econtraRaiz($valor1,$valor2);