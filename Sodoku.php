
<?php 

$contador=0;
$dados = [];


do{
	$numero = rand(1,9);
	if(!in_array($numero,$dados))
	{
		array_push($dados,$numero);
		$contador++;

	}
}while($contador < 9);

echo "<pre>".print_r($dados)."</pre>";


?>
