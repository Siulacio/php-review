<?php

interface HelloWordInterface
{
    public function sayHello(string $name): string;
    public function sayGoodbye(string $name): string;
}

class HolaMundo implements HelloWordInterface
{
    public function sayHello(string $name): string
    {
        return "Hola $name<br>";
    }

    public function sayGoodbye(string $name): string
    {
        return "Adiós $name<br>";
    }
}

$holaMundo = new HolaMundo();

echo $holaMundo->sayHello('Luis');
echo $holaMundo->sayGoodbye('Felipe');

