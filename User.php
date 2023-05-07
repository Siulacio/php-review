<?php

class User
{
    public string  $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$user = new User('Mariana', 3);
echo sprintf("%s tiene %d años", $user->name, $user->age);

$user2 = new User('Alejandro', 1);
echo sprintf("%s tiene %d años", $user2->name, $user2->age);
