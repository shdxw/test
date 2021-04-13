<?php


namespace Model;


class Korova
{
    public $name, $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function displayInfo()
    {
        echo "Name: $this->name; Age: $this->age<br>";
    }
}