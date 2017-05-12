<?php

$nombreProducto = 'Polo de CSS';//usando comillas simples
var_dump($nombreProducto);

$nombreProducto = "Polo de CSS";//usando comillas dobles
var_dump($nombreProducto);

/*no se observa ninguna diferencia aparente para ambos strings pero si hay una diferencia
*/

$valor='Polo de js';
$primero ='quiero un $valor';
var_dump($primero);

$segundo="quiero un $valor";
var_dump($segundo);

//en conclusión cuando se usan comillas dobles PHP tiene en cuenta los valores que almacenen las variables que sean llamadas en el string que se encuentra entre las comillas dobles

//una muy buena práctica consiste en poner entre corchetes la variable que deseo sea reconocida como variable dentro de las comillas dobles {$variable}

$segundo="quiero un {$valor}";
var_dump($segundo);


//concatenación: es buena práctica dejar un espacio antes y despues del punto para visualización del código

$primero='yo quiero';
$segundo=' un polo de js';

var_dump($primero . $segundo);

//PHP puede concatenar diferentes tipos de datos

//PHP convierte el string en un número para realizar operaciones si es posible:

$primero='2';
$segundo='3';

var_dump($primero+$segundo);
// es una buena práctica NO USAR STRINGS EN OPERACIONES MATEMÁTICAS


?>