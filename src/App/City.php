<?php
namespace App;

class City
{
    private string $name;
    private string $foundation;
    private int $population;

    public function __construct(string $name, string $foundation, int $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }

    public function __get($name)
    {
        if(isset($this->$name))
        {
            return $this->$name;
        }
    }
}
?>