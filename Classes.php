<?php

//let display errors in our code
error_reporting(E_ALL);
ini_set('display_errors', '1');

class User
{
    public int $id;
    public array $users;

    public function __construct(int $id)
    {
        $this->id = $id;
        $this->users = ['Duncan', 'Iverson', 'Parker'];
    }

    public function getName(): string
    {
        return $this->users[$this->id];
    }

    public function traverseUsers(): string
    {
        $result = '';
        foreach ($this->users as $user) {
            $result .= "{$user} <br>";
        }

        return $result;
    }

    public function findUser(int $id = null): string
    {
        return $this->users[$id ?? $this->id];
    }

}

$user = new User(0);
echo "<pre>";
var_dump($user);
echo "</pre>";
echo $user->getName();
echo "<br><br>";
echo $user->traverseUsers();
echo "<br>";
echo $user->findUser();



