<?php

class Customer implements SplObserver
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update($price)
    {
        echo "{$this->name}: The price has changed!\n";
    }
}