<?php
//casting consiste en convertir un tipo de dato en otro tipo de dato

$polos='4';
var_dump($polos);

//hacemos cast a integer

$polos = (int) $polos;
var_dump($polos);

//cast a float

$polos = (float) $polos;
var_dump($polos);

$polos=3.1416;
//cast a string

$nuevaPolos=(string) $polos;
var_dump($nuevaPolos);

//los arrays son un caso especial

$nuevaPolos=(array) $nuevaPolos;
var_dump($nuevaPolos);

//al convertir a tipo array lo que hace PHP es guardar el valor de el dato inicial en la posición cero de un nuevo vector.



?>