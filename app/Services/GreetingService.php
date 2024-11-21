<?php
namespace App\Services;

class GreetingService{
    public function sayHello(string $name):string
    {
        return "Hello, .$name";
    }
}

?>