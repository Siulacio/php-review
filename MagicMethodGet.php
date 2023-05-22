<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

class Producto
{
    protected string $nombre;
    protected int $qty;

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setQty(int $qty): void
    {
        $this->qty = $qty;
    }

    public function __get(string $name)
    {
        if (!property_exists($this, $name)) {
            die("la propiedad {$name} no existe.");
        }

        return $this->{$name};
    }

}

$producto = new Producto();
$producto->setNombre("Producto 1");
$producto->setQty(5);
echo $producto->getNombre();
echo "<br>";
echo $producto->nombre;
echo "<br>";
echo $producto->qty;
