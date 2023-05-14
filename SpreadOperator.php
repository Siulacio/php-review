<?php

// 1. Concatenar arrays
$array = [1, 2, 3, 4, 5];
echo sprintf("El array es %s<br>", json_encode($array));

$array2 = [...$array, 6, 7, 8, 9, 10];
echo sprintf("El array2 es %s<br>", json_encode($array2));

// 2. dinamismo en definición de elementos
function sum(...$numbers): int
{
    return array_sum($numbers);
}

echo sprintf("La suma es de %d <br>", sum(1, 2, 3, 4));

// 3. manipulando con strings
$words = ["Juan", "Felipe", "Jiménez", "León"];
function buildString(string $prefix, string $suffix, ...$words): string
{
    return $prefix . implode(" ", $words) . $suffix;
}

echo buildString("[", "]", ...$words);

