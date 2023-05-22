<?php

class Store
{
    protected Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function order(): void
    {
        $this->logger->create(
            "Nuevo pedido desde " . __CLASS__ . " a las " . date("H:i:s")
        );
    }
}
class Logger
{
    public function create(string $message): void
    {
        $file = fopen("order.txt", "w") or die ("No puedo abrir el archivo");
        fwrite($file, $message);
        fclose($file);
    }
}

$logger = new Logger();
$tienda = new Store($logger);
$tienda->order();


