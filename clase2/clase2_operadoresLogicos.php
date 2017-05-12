<?php
/*operadores lógicos

devuelven true si ambos 'operandos' son true
* and
* && tiene mayor presedencia e igual efecto que and

devuelven true si alguno de los dos operandos son true

*or
* || tiene mayor presedencia e igual efecto que or
*/

//tambien existe or exclusiva o XOR
//también existe negación o !

//////////operador ternario//////////////////

$curso = 'CSS';

$polo = ($curso == 'JS') ? 'polo JS' : 'Otro polo';

var_dump($polo);

////////operador de fusión de null///////////////

$polo = 'CSS';

/**
 isset: determina si una variable está definida y no es nula devolviendo true si esta definida y ademas no es nula.
*/

//si la variable polo esta definida y no es null arroja su valor, de lo contrario muestra el string 'un mensaje'

var_dump(isset($polo)? $polo:'un mensaje');
//la siguiente linea hace exactamente lo mismo usando el operador de fusión de null
var_dump($polo ?? 'un mensaje');

?>