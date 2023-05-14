<?php

function division(int $a, int $b): int
{
    if ($b == 0) {
        throw new Exception("Division by zero");
    }

    return $a / $b;
}

echo division(10, 0);

try {
    echo division(10, 0);
} catch (Exception $e) {
    echo $e->getMessage();
}
