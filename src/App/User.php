<?php
namespace App;

class User
{
    private string $name;
    private int $age;
    private const MAX_AGE = 18;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getAge() : int
    {
        return $this->age;
    }
    public function setAge(int $age) : void
    {
        if($this->age>self::MAX_AGE)
            $this->age = $age;
    }
}
?>