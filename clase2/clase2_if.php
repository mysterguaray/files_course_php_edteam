<?php
if(true){
	var_dump('esto se hace');
}

if(false){
	var_dump('esto no se imprime');
}

$polo='CSS';

if($polo=='CSS'){
	var_dump('El polo es de CSS');
}

/*operadores de comparacion disponibles

recordar que === quiere decir si el dato es identico es decir no solo es igual sino que manejan el mismo tipo de dato

http://php.net/manual/es/language.operators.comparison.php

//operador nave espacial <=>

/*	compara dos variables
	retorna -1 si es menor
	retorne 0 si es igual
	retorna 1 si es mayor
*/

	$b = 3;
	$a = 2;

	$c = $a <=> $b;
	var_dump($c);
	//para este caso el valor de c es -1

 //else: indica la opción que se realiza cuando la condición del if resulta ser false y no necesita una nueva condición.

//elseif: funciona similar al else con la diferencia de que implica o permite preguntar una nueva condición 

	$polo='JS';

	if($polo=='CSS'){
		var_dump('tengo un polo CSS');
	}elseif($polo=='JS'){
		var_dump('el polo es de JS');
	}
?>