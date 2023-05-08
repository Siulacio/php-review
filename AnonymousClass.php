<?php

$car = new class ("Ford", "Mustang", "2020") {
    public function __construct(public string $brand, public string $model, public string $year) {}

    public function __toString(): string
    {
        return sprintf("%s %s %s", $this->brand, $this->model, $this->year);
    }
};

echo $car;

$hello = new class {
    public function sayHello(): string
    {
        return "Hello World";
    }
};

echo "<br>";
echo $hello->sayHello();
