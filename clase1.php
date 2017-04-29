<?php

//echo 'hola mundo';

//comentarios con doble linea

/*
comentario 

de varias

lineas

*/


/*
 comentario de
 varias lineas
 mejor formateado con asteríscos
*/

/**
* Doc blocks
* @var int
*/

/**operadores aritmeticos
* suma
* resta
* multiplicación
* división
* modulo
*/ 

var_dump(6-2);
//con var_dump podemos ver el tipo de variable
/**
 * prioridad de las aplicaciones aritméticas
 * multiplicación
 * modulos
 * suma
 * resta
 */

//una buena práctica consiste en agrupar las operaciones matemáticas

//***PHP es de tipado dinámico luego podemos asignar un texto o un número en una misma variable en el transcurso de una aplicación y va a ser totalmente válido***/

// recordar que PHP usa como separador decimal el punto
//no está permitido usar guion (-) para declarar variables
/**
 * podemos declarar vectores de la sgt forma:
 * $vector[1,2,3];//apartir de la version 5 de php
 * $vector=array(1,2,3);//veriones anteriores a 5 de php
 */

//incrementar en uno una variable:
// $variable += 1;
// $variable ++;

/* cuando usamos comillas dobles el interprete de php busca si existen variables por ejemplo:
echo "bienvenido $NombreUsuario";
en este caso si la variable $NombreUsuario se encuentra definida, php pondrá su valor
*/
?>