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

echo"<hr>";
echo"<h2>Crear instancias desde un constructor</h2>";

class MyNewHelloWorld
{
    public function __construct(
        private readonly HolaMundo $holaMundo = new HolaMundo(),
    ) {}

    public function hello($name): string
    {
        return $this->holaMundo->sayHello($name);
    }
}

$myNewHelloWorld = new MyNewHelloWorld();
echo $myNewHelloWorld->hello("Alejandro");


