<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

class Database
{
    public string $name = "pruebas";

    public function __construct()
    {
        //empty for this example
    }

    public function select(): string
    {
        return "SELECT * FROM usuarios";
    }
}

class Usuario
{
    protected Database $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function selectUsuario(): string
    {
        return $this->database->select();
    }

    public function __toString(): string
    {
        return serialize($this->database);
    }
}

$db = new Database();
$usuario = new Usuario($db);
echo $usuario;
echo "<br>";
echo $usuario->selectUsuario();

