<?php
// declarar un array indexado:

$lenguajes=array('HTML','CSS','JS');

// otra forma de crear array

$lenguajes = ['HTML','CSS','JS'];

var_dump($lenguajes);

//los arrays pueden almacenar diferentes tipos de datos al tiempo

$detodo=['html',3,'54',3.5];

var_dump($detodo);

//al acceder a una posición inexistente o no definida de un vector nos dará como resultado el error: Undefined Offset

/////////////////////////Arrays asociativos:///////////////////////////
echo "asociativos";
//tienen llaves definidas por el programador
//todas las llaves de un array asociativo deben ser strings

$numeros =[
    'uno'		=>1,
	'dos'		=>2,
	'tres'		=>3,
	'cuatro'	=>4,
	'cinco'		=>5
];

var_dump($numeros);


//arrays  multidimensionales

// son cpnformados por arrays dentro de arrays, pueden ir tan profundo como sea necesario y pueden estar conformados por arrays indexados y asociativos en cualquier punto o dimensión

$cosas =[
	'animales' =>[
		'gato',
		'perro'=>['raza1','raza2','raza3','raza4'],
		'pez'
		],
	'colores'  =>['azul','amarillo','cafe'],
	'ropa'	   =>['camisa','pantalon'],
];

//$animales = $cosas['animales'];

//var_dump($animales[1]);

var_dump($cosas['animales']['perro'][2]);
?>