<?php
//sentencia switch similar al if excepto que no se usa una condición sino un valor que se quiere comparar.
$polo='CSS';

switch ($polo) {
	case 'CSS':
		var_dump('tengo un polo CSS');
		break;
	case 'JS':
		var_dump('tengo un polo JS');
		break;
	case 'HTML':
		var_dump('tengo un polo HTML');
		break;
	default:
		var_dump('mensaje por defecto');
		break;
}


?>