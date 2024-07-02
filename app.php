<?php
require __DIR__ . '/vendor/autoload.php';


// Here comes your code.

abstract class Animal {
    private string $name;
    protected string $noise;


    public function __construct(string $name)
    {
    
    }
    public function getName(): string {
        return $this->name;
    }
    function getNoise(): string {
        return $this->noise;
    }
}