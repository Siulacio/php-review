<?php

// se define una función anónima y esta a su vez es almacenada en una variable.
$function = function ()
{
    echo "Hola mundo desde una función anónima<br>";
};

// puedo comprobar si una variable almacena una función con el método is_callable()
if (is_callable($function)) {
    // para llamar a la función hago referencia a la variable y le coloco (); como notación natural de una función.
    $function();
}
