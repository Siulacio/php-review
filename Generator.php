<?php

echo "<h2>Generators</h2>";
echo "<hr>";
function generateNumbers(int $from, int $to): Generator
{
    for ($i = $from; $i <= $to; $i++) {
        yield $i;
    }
}

$generator = generateNumbers(1, 10);
foreach ($generator as $number) {
    echo $number . " ";
}

echo "<h2>Fibonacci Sequence</h2>";
echo "<hr>";

function fibonacci(int $number): Generator
{
    $current = 1;
    $previous = 0;

    for ($i = 0; $i < $number; $i++) {
        yield $current;
        $temp = $current;
        $current = $previous + $current;
        $previous = $temp;
    }
}

$fibs = fibonacci(10);
foreach ($fibs as $fib) {
    echo " ". $fib;
}

echo "<h2>Get even numbers</h2>";
echo "<hr>";

function getEvenNumbers(int $from, int $to): Generator
{
    for ($i = $from; $i <= $to; $i++) {
        if ($i % 2 == 0) {
            yield $i;
        }
    }
}

$evenNumbers = getEvenNumbers(1, 25);
foreach ($evenNumbers as $number) {
    echo $number . " ";
}


