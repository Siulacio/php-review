<?php

function employee(string $name, int $age, string $position): string
{
    return sprintf("%s tiene %d años y es %s<br>", $name, $age, $position);
}

echo employee("Miguel", 21, "Analista");
echo employee(age: 30, position: "Contadora", name: "Juliana");
echo employee(position: "Minero", name: "Victor", age: 36);
