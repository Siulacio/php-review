<?php
trait HelloWorld
{
    public function sayHello(): string
    {
        return "Hello World<br>";
    }
}

trait GoodbyeWorld
{
    public function sayGoodbye(): string
    {
        return "Goodbye World<br>";
    }
}

class MyHelloWorld
{
    use HelloWorld;
    use GoodbyeWorld;
}

$myHelloWorld = new MyHelloWorld();

echo $myHelloWorld->sayHello();
echo $myHelloWorld->sayGoodbye();
